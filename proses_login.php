<?php
// mengaktifkan session php
session_start();

// hubungkan koneksinya
include 'connect.php';

// menangkap data yang dikirim dari form
$user = $_POST['user']; 
$pass = $_POST['pass'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($host,"select * from user where username='$user' and password='$pass' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}

?>