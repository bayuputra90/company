<?php
include 'db/koneksi_db.php';

$sql = "SELECT * FROM tbl_team";
$hasil = $koneksi->query($sql);

// return var_dump($data);

if ($hasil->num_rows != 0){
    while ($data = $hasil->fetch_assoc()) {
        $dataTeam[] = $data;
    }
}
?>