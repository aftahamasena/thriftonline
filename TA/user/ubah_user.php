<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "../koneksi.php";
    $qry_get_user = mysqli_query($conn, "select * from user where id = '" . $_GET['id'] . "'");
    $dt_user = mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah Data User</h3>
    <form action="proses_ubah_user.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_user['id'] ?>">
        Nama User :
        <input type="text" name="nama_user" value="<?= $dt_user['nama_user'] ?>" class="form-control">
        Nomor Handphone :
        <input type="text" name="tlp_user" value="<?= $dt_user['tlp_user'] ?>" class="form-control">
        Alamat User :
        <input type="textarea" name="alamat_user" class="form-control">
        Email :
        <input type="text" name="email_user" value="<?= $dt_user['email_user'] ?>" class="form-control">
        Password :
        <input type="password" name="password_user" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah user" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>