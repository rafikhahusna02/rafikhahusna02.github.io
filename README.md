<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Rafikhah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background: url('https://source.unsplash.com/1600x900/?library') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: rgba(255, 255, 255, 0.8); color: #000; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .container { max-width: 800px; margin: auto; background: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; }
        .form-container { margin-top: 20px; }
        input, button { padding: 10px; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perpustakaan Rafikhah</h1>
        <nav>
            <a href="#beranda">Beranda</a> | 
            <a href="#katalog">Katalog Buku</a> | 
            <a href="#daftar">Daftar</a>
        </nav>
        
        <section id="beranda">
            <h2>Selamat Datang di Perpustakaan Rafikhah</h2>
            <p>Temukan berbagai koleksi buku digital yang dapat Anda baca kapan saja.</p>
        </section>
        
        <section id="katalog">
            <h2>Katalog Buku</h2>
            <table>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                </tr>
                <tr>
                    <td><a href="#">Dasar pemograman delphi 5, Jil.1</a></td>
                    <td>Abdul Kadil </td>
                    <td>2001</td>
                </tr>
                <tr>
                    <td><a href="#">CSS MANAJEMEN PERPUSTAKAAN</a></td>
                    <td>Heni Fartika Fartianti</td>
                    <td>2022</td>
                </tr>
            </table>
        </section>
        
        <section id="daftar" class="form-container">
            <h2>Formulir Pendaftaran</h2>
            <form>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <button type="submit">Daftar</button>
            </form>
        </section>
    </div>
</body>
</html>
