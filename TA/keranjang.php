<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="style2.css">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>


<body>
    <!-- nav -->
    <div>
        <div class="navbar">
            <a href="home.php" , class="navbar-logo">EcoSena<span>Vintage </span></a>
            <div class="navco">
                <i>-<span>Check Out</span></i>
            </div>
        </div>
        <!-- address -->
        <?php
        include "./koneksi.php";
        session_start();
        $id = $_SESSION['id'];
        $qry_user = mysqli_query($conn, "select * from user where id = $id");
        $data_user = mysqli_fetch_array($qry_user)
        ?>
        <div class="address">
            <div class="top">
                <i data-feather="map-pin" class="logo"></i>
                <span>Alamat Pengiriman</span>
            </div>
            <div class="isi">
                <div class="left">
                    <?= $data_user['nama_user'] ?>
                    <span>(+<?= $data_user['tlp_user'] ?>)</span>
                </div>
                <div class="right">
                    <td><?= $data_user['alamat_user'] ?></td>
                </div>
            </div>
        </div>
        <!-- produk -->
        <div class="pro">
            <div class="top">
                <i data-feather="shopping-bag" class="logo"></i>
                <span>Produk Dipesan</span>
            </div>
            <table class="showpro">
                <thead>
                    <tr>
                        <th>Merek</th>
                        <th>Jenis</th>
                        <th>Ukuran</th>
                        <th>Foto</th>
                    </tr>
                    </section>
                </thead>
                <tbody>
                    <?php
                    include "./koneksi.php";
                    $qry_get_barang = mysqli_query($conn, "select * from barang where id = '" . $_GET['id'] . "'");
                    $data_barang = mysqli_fetch_array($qry_get_barang);
                    ?>
                    <form action="home.php" method="post">
                        <tr>
                            <td><?= $data_barang['merek_barang'] ?></td>
                            <td><?= $data_barang['jenis_barang'] ?></td>
                            <td><?= $data_barang['ukuran_barang'] ?></td>
                            <td><img src="../img/<?= $data_barang['foto_barang'] ?>"></td>
                        </tr>
                </tbody>
            </table>
            <table class="tableco">
                <?php
                include "./koneksi.php";
                $qry_ongkir = mysqli_query($conn, "select * from pembayaran where id = 1");
                $data_ongkir = mysqli_fetch_array($qry_ongkir);
                ?>
                <?php
                $harga_barang = $data_barang['harga_barang'];
                $ongkir = $data_ongkir['ongkir'];
                $total = $harga_barang + $ongkir;
                ?>
                <div class="saldo">
                    <i data-feather="dollar-sign" class="ecopay"></i>
                    <i>Saldo EcoPay <span>(Rp.<?= $data_user['saldo'] ?>)</span></i>
                </div>
                <thead>
                    <tr>
                        <th>Produk</th>
                    </tr>
                    <tr>
                        <th>Ongkir</th>
                    </tr>
                    <tr>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rp.<?= $data_barang['harga_barang'] ?></td>
                    </tr>
                    <tr>
                        <td>Rp.<?= $data_ongkir['ongkir'] ?></td>
                    </tr>
                    <tr>
                        <td>Rp.<?= $total ?></td>
                    </tr>
                </tbody>

            </table>
            <a href="proses_co.php?id=<?=$data_barang['id']?>" onclick="return confirm('Check Out Barang ?')" ><span class="btn-beli">Check Out</span></a>
        </div>
    </div>
    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
</body>

</html>