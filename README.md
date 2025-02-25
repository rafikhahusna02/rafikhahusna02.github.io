<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital Rafikha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Perpustakaan Digital Rafikha</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Selamat datang di Perpustakaan Rafikha</h2>
        <p>Website ini dibuat untuk memenuhi tugas mata kuliah Pengembangan Web Perpustakaan Praktik.</p>
        <p>Website ini dikembangkan dengan dukungan dan kerjasama dari <a href="https://library.usu.ac.id/">https://library.usu.ac.id/</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Perpustakaan Digital Rafikha</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Perpustakaan Digital Rafikha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Perpustakaan Digital Rafikha</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Tentang Saya</h2>
        <table border="1">
            <tr>
                <th>Nama</th>
                <td>Rafikha Husna</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>220709016</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>Perpustakaan dan Sains Informasi</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>Ilmu Budaya</td>
            </tr>
            <tr>
                <th>Universitas</th>
                <td>Universitas Sumatera Utara</td>
            </tr>
            <tr>
                <th>Email</th>
                <td><a href="mailto:rafikhahusna02@gmail.com">rafikhahusna02@gmail.com</a></td>
            </tr>
            <tr>
                <th>Sosial Media</th>
                <td><a href="https://www.instagram.com/rfkhahusna/" target="_blank">Instagram</a></td>
            </tr>
        </table>
    </main>

    <footer>
        <p>&copy; 2025 Perpustakaan Digital Rafikha</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Perpustakaan Digital Rafikha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Perpustakaan Digital Rafikha</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Contact Us</h2>
        <p>Ingin tahu lebih lanjut tentangku? Silakan kirim pesan di form ini:</p>
        <form action="submit_form.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Pesan:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Kirim Pesan">
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Perpustakaan Digital Rafikha</p>
    </footer>
</body>
</html>

