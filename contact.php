<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Home</title>
</head>
<body>
    <nav>
        <a href="Index.php">Beranda</a>
        <a href="cv.pdf">Download cv saya</a>
        <a href="contact.php">Kontak</a>
        <a href="tentang.php">Tentang Saya</a>
    </nav>
    
    <hr />
    <form action="proses-contact.php" method="post">
        <table>
            <tr>
                <td>Email</td>
                
            </tr>
            <tr>
                <td><input type="text" name="email" id="Masukkan alamat email" placeholder="Masukkan Alamat email"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                
            </tr>
            <tr>
            <td><input type="text" name="pesan" id="tuliskan Pesan Anda" placeholder="Tuliskan pesan anda"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>

    <hr>
    <footer style="text-align: center;">
        <p>Hak Cipta © 2024 kairos62. Semua hak dilindungi undang-undang.</p>
    </footer>

    
</body>
</html>