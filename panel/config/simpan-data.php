<?php
include '../db/koneksi_db.php';
session_start();

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$image = $_FILES['image']['size'];

// return var_dump(($image != 0));

if ($image != 0) {
    // return var_dump(getimagesize($_FILES['fileUpload']['tmp_name']));
    $dir = "../uploads/";
    $targetFile = $dir . basename($_FILES['image']['name']);
    $namaFile = basename($_FILES['image']['name']);
    $fileTipe = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['image']['tmp_name']);
    $existFile = file_exists($targetFile);
    $validasiOk = true;

    // return var_dump(file_exists($targetFile));

    if ($_FILES['image']['name'] == "") {
        $_SESSION['error_image'] = "Anda belum upload file";
        $validasiOk = false;
    } elseif (!$check) {
        $_SESSION['error_image'] = "Ini bukan gambar";
        $validasiOk = false;
    } elseif ( $fileTipe != "jpg" && $fileTipe != "png" && $fileTipe != "gif" ) {
        $_SESSION['error_image'] = "file dengan ekstensi .jpg .png dan .gif saja yang dibolehkan";
        $validasiOk = false;
    } elseif ( $existFile ) {
        $_SESSION['error_image'] = "file sudah ada";
        $validasiOk = false; 
    }

    if ($validasiOk) {
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    } else {
        header('location: ../team-add.php');
        exit;
    }

    $sql = "INSERT INTO tbl_team values ('', '$nama', '$posisi', '$namaFile', '$email', '$username', '$password')";
} else {

    $sql = "INSERT INTO tbl_team values ('', '$nama', '$posisi', '', '$email', '$username', '$password')";
    
}

$hasil = $koneksi->query($sql);

if ($hasil == true) {
    // kirim pesan ke halaman awal dengan session
    $_SESSION['message'] = "Data berhasil disimpan";

    // redirect ke halaman team.php
    header('location: ../team.php');
    exit;
} else {
    // kirim pesan ke halaman awal dengan session
    $_SESSION['error'] = "Data gagal disimpan";

    // redirect ke halaman team.php
    header('location: ../team-add.php');
    exit;
}

?>