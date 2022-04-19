<?php
include("./repositories/base.php");
$user = find("user", "WHERE kode_user = $_GET[id]");
$user = mysqli_fetch_assoc($user);
if (isset($_POST['submit'])) {
    include "./services/user.php";
    if (updateService($_POST, $_GET['id'])) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=user'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=user'</script>";
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Tambah User</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $user['nama'];  ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required value="<?= $user['email'];  ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telp">Telp</label>
                                        <input type="text" class="form-control" name="telp" id="telp" required value="<?= $user['telp'];  ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <p>* Kosongkan password jika tidak ingin mengganti password</p>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-sm mt-2" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>