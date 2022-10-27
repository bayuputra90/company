<?php
session_start();
include '../db/koneksi_db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_team where username = '$username'AND password = '$password'";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    $data = $hasil->fetch_assoc();

    $_SESSION['data'] = $data;

    header('location: ../home.php');
    exit;
} else {
    $_SESSION['error'] = "Login gagal";
    header('location: ../index.php');
    exit;
}



?>