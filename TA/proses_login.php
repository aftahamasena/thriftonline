<?php 
    if($_POST){
        $email_user=$_POST['email_user'];
        $password_user=$_POST['password_user'];
        if(empty($email_user)){
            echo "<script>alert('email_user tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password_user)){
            echo "<script>alert('password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "./koneksi.php";
            $qry_login=mysqli_query($conn,"SELECT * from user where email_user = '".$email_user."' and password_user = '".md5($password_user)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama_user']=$dt_login['nama_user'];
                header("location: home.php");
            } else {
                echo "<script>alert('email dan password tidak sesuai');location.href='login.php';</script>";
            }
        }
    }
?>
