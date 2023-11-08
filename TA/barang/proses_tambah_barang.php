<?php
if ($_POST) {
    $merek_barang = $_POST['merek_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $ukuran_barang = $_POST['ukuran_barang'];
    $harga_barang = $_POST['harga_barang'];
    $foto_barang = $_POST['foto_barang'];
    if (empty($merek_barang)) {
        echo "<script>alert('nama barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($jenis_barang)) {
        echo "<script>alert('jenis barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($ukuran_barang)) {
        echo "<script>alert('ukuran barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($harga_barang)) {
        echo "<script>alert('harga barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($foto_barang)) {
        echo "<script>alert('foto barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into barang (merek_barang,jenis_barang,ukuran_barang,harga_barang,foto_barang) 
        value ('" . $merek_barang . "','" . $jenis_barang . "','" . $ukuran_barang . "','" . ($harga_barang) . "','" . ($foto_barang) . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan barang');location.href='tambah_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan barang');location.href='tambah_barang.php';</script>";
        }
    }
}
