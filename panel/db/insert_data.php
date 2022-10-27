<?php
include "koneksi_db.php";

$sql = "INSERT INTO tbl_team values (
    '','bayu','Web Development','','email@gmail.com','rumahcoding10','password'
)";

$cekdata = $koneksi->query($sql);

if ($cekdata == true) {
    echo "Data berhasil ditambah";
} else {
    echo "Data gagal di input";
}


?>