<?php
include "./koneksi.php";
$qry_ongkir = mysqli_query($conn, "select * from pembayaran where id = 1");
$data_ongkir = mysqli_fetch_array($qry_ongkir);
$qry_barang = mysqli_query($conn, "select * from barang where id = '" . $_GET['id'] . "'");
$data_barang = mysqli_fetch_array($qry_barang);
session_start();
$id = $_SESSION['id'];
$qry_user = mysqli_query($conn, "select * from user where id = $id");
$data_user = mysqli_fetch_array($qry_user);

date_default_timezone_set('Asia/Jakarta');
$curentDate = new DateTime();
$formatedtime = $curentDate->format('y-m-d');

$harga = $data_barang['harga_barang'];
$ongkir = $data_ongkir['ongkir'];
$total = $harga + $ongkir;
if ($total > $data_user['saldo']) {
    echo "<script>alert('saldo anda tidak cukup');location.href='keranjang.php?id=" . $_GET['id'] . "'</script>";
} else {
    mysqli_query($conn, "update user set saldo = " . $data_user['saldo'] - $total . "");
    echo "<script>alert('saldo anda telah berkurang');location.href='keranjang.php?id=" . $_GET['id'] . "'</script>";
    exit();
}
