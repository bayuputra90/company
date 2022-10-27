<?php 
include 'template-header.php'; 

if (isset($_SESSION['error_image'])) {
    $error_image = $_SESSION['error_image'];

    unset($_SESSION['error_image']);
}
?>
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data</h3>
    </div>
    <div class="alert alert-danger alert-dismissible fade show <?php echo (empty($error)) ? "d-none" : "" ?>" role="alert">
        <?= $error ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="config/simpan-data.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" class="form-control" id="posisi" placeholder="Masukan posisi">
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
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password">
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