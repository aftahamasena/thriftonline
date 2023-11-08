<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "../koneksi.php";
    $qry_get_barang = mysqli_query($conn, "select * from barang where id = '" . $_GET['id'] . "'");
    $dt_barang = mysqli_fetch_array($qry_get_barang);
    ?>
    <h3>Ubah Data Barang</h3>
    <form action="proses_ubah_barang.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_barang['id'] ?>">
        Merek :
        <input type="text" name="merek_barang" value="<?= $dt_barang['merek_barang'] ?>" class="form-control">
        Jenis :
        <input type="text" name="jenis_barang" value="<?= $dt_barang['jenis_barang'] ?>" class="form-control">
        ukuran :
        <input type="text" name="ukuran_barang" value="<?= $dt_barang['ukuran_barang'] ?>" class="form-control">
        harga :
        <input type="text" name="harga_barang" value="<?= $dt_barang['harga_barang'] ?>" class="form-control">
        foto :
        <input type="file" name="foto_barang" value="<?= $dt_barang['foto_barang'] ?>" class="form-control">

        <input type="submit" name="simpan" value="Ubah barang" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>