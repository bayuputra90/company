<?php
include "koneksi_db.php";

$sql = "CREATE TABLE tbl_team (
    id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama varchar(50) not null,
    posisi varchar(50) not null,
    image varchar(255) DEFAULT Null,
    email varchar(50) not null,
    username varchar(50) not null,
    password varchar(50) not null
)";

$create_table = $koneksi->query($sql);

if ($create_table == true) {
    echo "Table berhasil dibuat";
} else {
    echo "Table gagal dibuat";
}

?>