<?php 
include 'template-header.php';
include 'db/koneksi_db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_team where id = '$id'";
$hasil = $koneksi->query($sql);
$data = $hasil->fetch_assoc();

if (isset($_SESSION['error_image'])) {
    $error_image = $_SESSION['error_image'];

    unset($_SESSION['error_image']);
}

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];

    unset($_SESSION['error']);
}
?>
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>
    <div class="alert alert-danger alert-dismissible fade show <?php echo (empty($error)) ? "d-none" : "" ?>" role="alert">
        <?= $error ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="config/update-data.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="hidden" name="image" value="<?php echo $data['image'] ?>">
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="nama" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" value="<?php echo $data['posisi'] ?>" class="form-control" id="posisi" placeholder="Masukan posisi">
            </div>
            <div class="form-group">
                <label for="image">Upload Photo Profil</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Upload</label>
                    </div>
                </div>
                <label class="text-danger <?php echo (empty($error_image)) ? "d-none" : "" ?>"><?= $error_image ?></label>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control" id="email" placeholder="Masukan email">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" id="username" placeholder="Masukan username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control" id="password" placeholder="Masukan password">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->

<?php include 'template-footer.php' ?>