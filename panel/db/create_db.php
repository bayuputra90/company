<?php
include 'koneksi_server.php';
$sql = "CREATE database perusahaan";

$create_db = $koneksi->query($sql);

if ($create_db == true) {
    echo "DB berhasil di buat";
} else {
    echo "DB gagal dibuat";
}

?>