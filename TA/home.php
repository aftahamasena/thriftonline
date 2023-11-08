<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thrifting Online</title>
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Style -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  include "./koneksi.php";
  $qry_user = mysqli_query($conn, "select * from user");
  $data_user = mysqli_fetch_array($qry_user);
  ?>
  <!-- navbar -->
  <nav class="navbar">
    <a href="#" , class="navbar-logo">EcoSena<span>Vintage.</span></a>
    <div class="navbar-main">
      <a href="#">Home</a>
      <a href="#product">Product</a>
      <a href="./login.php">LogOut</a>
    </div>
    <div class="navbar-extra">
      <div class="dropdown">
        <a href="#"><i data-feather="shopping-cart"></i></a>
        <div class="dropdown-content">
          <div class="column">
            <!-- Isi kolom 1 -->
            <h3>Saldo EcoPay:</h3>
            <span>Rp<?=$data_user['saldo']?></span>
          </div>
        </div>
      </div>
    </div>

  </nav>
  <!-- home -->
  <section class="hero" id="home">
    <main class="content">
      <h1>EcoSena Vintage, Thrifting <span>Murah dan Berkualitas</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, vel,
        ratione libero ipsa accusamus nihil suscipit similique quo recusandae
        vero molestiae sequi tenetur voluptatibus animi dolorem eveniet ex
        pariatur nam.
      </p>
      <a href="#product" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <section class="item" id="product">
    <h2>Avaible Product</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    <?php
    include "koneksi.php";
    ?>
    <div class="row">
      <?php
      $qry_barang = mysqli_query($conn, "select * from barang");
      while ($dt_barang = mysqli_fetch_array($qry_barang)) {
      ?>
        <a href="keranjang.php?id=<?= $dt_barang['id'] ?>" class="pro">
          <img src="../img/<?= $dt_barang['foto_barang'] ?>" alt="">
          <div class="desc">
            <span> <?= $dt_barang['merek_barang'] ?> </span>
            <h4> <?= $dt_barang['jenis_barang'] ?> </h4>
            <span class="price"> Rp <?= $dt_barang['harga_barang'] ?>,00 </h5>
          </div>
        </a>
      <?php
      }
      ?>
    </div>
  </section>
  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>