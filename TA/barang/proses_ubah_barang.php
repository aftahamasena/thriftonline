<?php
if ($_POST) {
    $id = $_POST['id'];
    $merek_barang = $_POST['merek_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $ukuran_barang = $_POST['ukuran_barang'];
    $harga_barang = $_POST['harga_barang'];
    $foto_barang = $_POST['foto_barang'];
    if (empty($merek_barang)) {
        echo "<script>alert('merek barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } elseif (empty($jenis_barang)) {
        echo "<script>alert('jenis barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "../koneksi.php";
        $update = mysqli_query($conn, "update barang set merek_barang='" . $merek_barang . "',jenis_barang='" . $jenis_barang . "',ukuran_barang='" . $ukuran_barang . "',harga_barang='" . ($harga_barang) . "',foto_barang='" . ($foto_barang) . "' where id= $id") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update barang');location.href='tampil_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal update barang');location.href='ubah_barang.php?id=" . $id . "';</script>";
        }
    }
}

// <?php
// if($_POST){
//     $id_siswa=$_POST['id_siswa'];
//     $nama_siswa=$_POST['nama_siswa'];
//     $tanggal_lahir=$_POST['tanggal_lahir'];
//     $alamat=$_POST['alamat'];
//     $gender=$_POST['gender'];
//     $username=$_POST['username'];
//     $password=$_POST['password'];
//     $id_kelas=$_POST['id_kelas'];
//     if(empty($nama_siswa)){
//         echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

//     } elseif(empty($username)){
//         echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
//     } else {
//         include "koneksi.php";
//         if(empty($password)){
//             $update=mysqli_query($conn,"update siswa set nama_siswa='".$nama_siswa."',tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."', username='".$username."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."' ") or die(mysqli_error($conn));
//             if($update){
//                 echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
//             } else {
//                 echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
//             }
//         } else {
//             $update=mysqli_query($conn,"update siswa set nama_siswa='".$nama_siswa."',tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."', username='".$username."', password='".md5($password)."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."'") or die(mysqli_error($conn));
//             if($update){
//                 echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
//             } else {
//                 echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
//             }
//         }
        
//     } 
// }
// ?>

