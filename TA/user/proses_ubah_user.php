<?php
if ($_POST) {
    $id = $_POST['id'];
    $nama_user = $_POST['nama_user'];
    $tlp_user = $_POST['tlp_user'];
    $email_user = $_POST['email_user'];
    $alamat_user = $_POST['alamat_user'];
    $password_user = $_POST['password_user'];
    if (empty($nama_user)) {
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($tlp_user)) {
        echo "<script>alert('nomor user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "../koneksi.php";
        $update = mysqli_query($conn, "update user set nama_user='" . $nama_user . "',tlp_user='" . $tlp_user . "',alamat_user='".$alamat_user."',email_user='" . $email_user . "',password_user='" . md5($password_user) . "' where id= $id") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=" . $id . "';</script>";
        }
    }
}
