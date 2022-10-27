<?php
    $server = "127.0.0.1";
    $user = "root";
    $password = "";

    $koneksi = new mysqli($server, $user, $password);

    if ($koneksi->connect_error) {
        die('Koneksi gagal ' . $koneksi->connect_error);
    } else {
        echo "Koneksi Berhasil";
    }


?>