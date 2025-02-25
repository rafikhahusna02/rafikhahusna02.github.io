<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital Rafikha</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { max-width: 900px; margin: auto; background: white; padding: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        nav { background: #333; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        section { padding: 20px; }
        h1, h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background: #ddd; }
        form { background: #fff; padding: 20px; box-shadow: 0px 0px 5px rgba(0,0,0,0.1); }
        label, input, textarea { display: block; margin-top: 10px; width: 100%; padding: 8px; }
        button { margin-top: 10px; padding: 10px; background: #333; color: white; border: none; cursor: pointer; }
        button:hover { background: #555; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#contact">Contact Us</a>
        </nav>

        <section id="home">
            <h1>Perpustakaan Digital Rafikha</h1>
            <p>Selamat datang di Perpustakaan Rafikha, website ini dibuat untuk memenuhi tugas mata kuliah Pengembangan Web Perpustakaan Praktik.</p>
            <p>Website ini dikembangkan dengan dukungan dan kerjasama dari <a href="https://library.usu.ac.id/" target="_blank">https://library.usu.ac.id/</a>.</p>
        </section>

        <section id="about">
            <h2>About Me</h2>
            <table>
                <tr><th>Nama</th><td>Rafikha Husna</td></tr>
                <tr><th>NIM</th><td>220709016</td></tr>
                <tr><th>Program Studi</th><td>Perpustakaan dan Sains Informasi</td></tr>
                <tr><th>Fakultas</th><td>Ilmu Budaya</td></tr>
                <tr><th>Universitas</th><td>Universitas Sumatera Utara</td></tr>
                <tr><th>Email</th><td>rafikhahusna02@gmail.com</td></tr>
                <tr><th>Sosial Media</th><td><a href="https://www.instagram.com/rfkhahusna/" target="_blank">Instagram</a></td></tr>
            </table>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>Ingin tahu lebih lanjut tentangku? Silakan kirim pesan di formulir ini.</p>
            <form>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>
    </div>
</body>
</html>
