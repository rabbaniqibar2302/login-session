<?php
include 'connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$name_complete = $_POST['name_complete'];

$query = mysqli_query($host,"insert into user values(
    '',
    '$user',
    '$pass',
    '$name_complete',
    'admin'
)");

if($query){
    echo "Anda telah berhasil daftar";
}else{
    echo "Anda gagal daftar, silahkan coba lagy";
}
?>