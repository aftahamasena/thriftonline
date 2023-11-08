<?php
if($_POST){
    $nama_user=$_POST['nama_user'];
    $tlp_user=$_POST['tlp_user'];
    $alamat_user=$_POST['alamat_user'];
    $role=$_POST['role'];
    $email_user=$_POST['email_user'];
    $password_user=$_POST['password_user'];
    
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($email_user)){
        echo "<script>alert('email tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password_user)){
        echo "<script>alert('password_user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama_user,tlp_user,email_user,role,saldo,alamat_user,password_user) 
        value ('".$nama_user."','".$tlp_user."','".$email_user."','user',3000000,'".$alamat_user."','".md5($password_user)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tambah_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
        }
    }
}
