<?php
include '../db/koneksi_db.php';
session_start();
$id = $_GET['id'];

$imageLama = "SELECT * FROM tbl_team where id = '$id'";
$imageLama = $koneksi->query($imageLama);
$imageLama = $imageLama->fetch_assoc();
$imageLama = "../uploads/" . $imageLama['image'];

unlink($imageLama);

$sql = "DELETE FROM tbl_team where id = '$id'";
$hasil = $koneksi->query($sql);

if ($hasil == true) {
    // kirim pesan ke halaman awal dengan session
    $_SESSION['message'] = "Data berhasil dihapus";

    // redirect ke halaman team.php
    header('location: ../team.php');
    exit;
} else {
    // kirim pesan ke halaman awal dengan session
    $_SESSION['error'] = "Data gagal dihapus";

    // redirect ke halaman team.php
    header('location: ../team.php');
    exit;
}

?>