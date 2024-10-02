<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="Style fixx.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="beranda"><a href="">SMK Plus Pratama Adi</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index fixx.html">Home</a></li>
                    <li><a href="registrasi.html">Registration</a></li>
                    <li><a href="jurusan.html">Jurusan</a></li>
                    <li><a href="alamat.html">Alamat</a></li>
                    <li><a href="tentang.html">Tentang Kita</a></li>
                    <li><a href="Login.html" class="tbl-biru">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
<form action="periksa_login.php" method="post">
    <h3 align="center">Login</h3>
    <input type="text" placeholder="Username" required>
    <input type="password" placeholder="password" required>
    <button type="submit" name="submit" value="Login">Login</button>
</form>
<div id="copyright">
    <div class="wraper">
        &copy; 2024. <b>SMK PLUS PRATAMA ADI.</b>
    </div>
</div>
</body>
</html>