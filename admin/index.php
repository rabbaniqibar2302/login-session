<html>

<head>
    <title>Halaman Admin</title>
</head>

<body>
    <h2>Halaman Admin</h2>
    <!-- cek apakah sudah login atau belum -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location : ../index.php?pesan=belum_login");
    }
    ?>
    <!-- cek apakah sudah login atau belum -->
    <h4>Selamat Datang Admin</h4>
</body>

</html>