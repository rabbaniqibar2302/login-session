<html>
    <head>
        <title>Login Menggunakan Session</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h3>Silahkan untuk login</h3>

        <!-- Cek Pesan Notifikasi -->
        <?php
        if(isset($_GET['pesan'])){
            // untuk akun belum di regis
            if($_GET['pesan'] == "gagal"){
                echo "Login Gagal! user dan pass salah!";
            // untuk akun yang sudah keluar
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil Logout";
            // mencegah untuk mengakses langsung halaman dashboard
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda Harus login untuk mengakses halaman ini";
            }
        }
        ?>
        <!-- Cek Pesan Notifikasi -->

        <!-- Form Login -->
        <form action="proses_login.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="user">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="pass">
            </div>
            <div>
                <input type="submit" value="Masuk" name="login">
            </div>
        </form>
        <!-- Form Login -->
        <p>Anda belum punya akun? <a href="regis.php">Daftar Sekarang</a></p>
    </body>
</html>