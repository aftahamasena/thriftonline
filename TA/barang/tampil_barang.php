<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
    img {
        width: 144px;
        height: 144px;
    }
</style>
<body>
    <h3>Tampil Barang</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Merek</th>
                <th>Jenis</th>
                <th>Ukuran </th>
                <th>Harga</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_barang = mysqli_query($conn, "select * from barang");
            $no = 0;
            while ($data_barang = mysqli_fetch_array($qry_barang)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_barang['id'] ?></td>
                    <td><?= $data_barang['merek_barang'] ?></td>
                    <td><?= $data_barang['jenis_barang'] ?></td>
                    <td><?= $data_barang['ukuran_barang'] ?></td>
                    <td><?= $data_barang['harga_barang'] ?></td>
                    <td><img src="../img/<?= $data_barang['foto_barang'] ?>"></td>
                    <td><a href="ubah_barang.php?id=<?= $data_barang['id'] ?>" class="btn btn-success">Ubah</a>
                        | <a href="hapus_barang.php?id=<?= $data_barang['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>