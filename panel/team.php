<?php include 'template-header.php' ?>
<?php include 'config/tampil_data_team.php' ?>
<?php
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    unset($_SESSION['message']);
}
?>

<h4 class="text-center">Data Team</h4>
<a class="btn btn-warning" href="team-add.php">Tambah Data</a>

<div class="alert alert-danger alert-dismissible fade show <?php echo (empty($message)) ? "d-none" : "" ?>" role="alert">
    <?= $message ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Posisi</th>
            <th scope="col">Profile</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if (isset($dataTeam)) {
                $x = 1;
                foreach ($dataTeam as $data) {
        ?>

        <tr>
            <th scope="row"><?php echo $x++ ?></th>
            <td><?php ECHO $data['nama'] ?></td>
            <td><?php echo $data['posisi'] ?></td>
            <td><img src="uploads/<?php echo $data['image'] ?>" height="75px" width="75px" alt=""></td>
            <td>
                <a href="team-edit.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a>
                <a href="config/hapus-data.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus ?')">Hapus</a>
            </td>
        </tr>
        
        <?php            
                }
            }
        ?>
    </tbody>
</table>

<?php include 'template-footer.php' ?>