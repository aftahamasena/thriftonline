<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>addbarang</title>
</head>

<body>
    <h3>Add Barang</h3>
    <form action="proses_tambah_barang.php" method="post">
        Merek Barang :
        <input type="text" name="merek_barang" class="form-control">
        Jenis  Barang :
        <input type="text" name="jenis_barang" class="form-control">
        Ukuran  Barang :
        <input type="text" name="ukuran_barang" class="form-control">
        Harga  Barang :
        <input type="text" name="harga_barang" class="form-control">
        Foto Barang :
        <input type="file" name="foto_barang" class="form-control"> 

        <?php
        include "../koneksi.php";
        $qry_barang = mysqli_query($conn, "select * from barang");
        while ($data_barang = mysqli_fetch_array($qry_barang)) {
            echo '<option value="' . $data_barang['id'] . '"></option>';
        }
        ?>
        <input type="submit" name="simpan" value="Tambah Barang" class="btn btn-primary">
    </form>




</body>

</html>