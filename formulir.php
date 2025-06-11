<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pengunjung</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.unsplash.com/photo-1702974915123-16739a9c3577?q=80&w=2070&auto=format&fit=crop');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      color: #333;
    }

    body.dark-mode {
      background-color: #1e1e1e;
      background-image: none;
      color: #fff;
    }

    header, footer {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 20px;
      backdrop-filter: blur(6px);
    }

    header.dark-mode, footer.dark-mode {
      background-color: #2c2c2c;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(4px);
      padding: 10px;
      gap: 20px;
      flex-wrap: wrap;
    }

    nav a {
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .container {
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      margin: 30px auto;
      border-radius: 10px;
      max-width: 800px;
    }

    .dark-mode .container {
      background-color: #2c2c2c;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
    }

    td {
      padding: 12px;
      vertical-align: top;
    }

    td:first-child {
      font-weight: bold;
      width: 30%;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #2563eb;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      margin: 20px auto 0;
      display: block;
    }

    input[type="submit"]:hover {
      background-color: #1e40af;
    }

    .dark-mode input,
    .dark-mode select {
      background-color: #444;
      color: white;
      border: 1px solid #666;
    }

    .dark-mode input[type="submit"] {
      background-color: #4f46e5;
    }

    .dark-mode nav a {
      color: white;
    }

    .dark-mode input[type="submit"]:hover {
      background-color: #3730a3;
    }
  </style>
</head>
<body>
  <header>
    <h1>📚 Perpustakaan Digital Rafikha 📖</h1>
    <p>Membaca Tanpa Batas 🚀</p>
  </header>

  <nav>
    <a href="index.html">🏠 Beranda</a>
    <a href="about-me.html">🙋 Tentang Saya</a>
    <a href="contact-me.html">📩 Kontak</a>
    <a href="event.html">📅 Event</a>
    <a href="lainnya.html">➕ Lainnya</a>
  </nav>

  <div class="container">
    <button class="dark-mode-toggle" onclick="toggleDarkMode()">🌙 Dark Mode</button>
    <h2>📋 Formulir Pengunjung</h2>
    <form action="proses_formulir.php" method="POST">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
          <td>NIP/NIM</td>
          <td><input type="text" name="nip_nim" required></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="tel" name="telepon" required></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <select name="jenis_kelamin" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
          <td>Jenis Pengunjung</td>
          <td>
            <select name="jenis_pengunjung" required>
              <option value="">Pilih Jenis Pengunjung</option>
              <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
              <option value="Umum">Umum</option>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" value="Kirim">
    </form>
  </div>

  <footer>
    <p>&copy; 2025 Perpustakaan Digital Rafikha 📖✨</p>
  </footer>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      document.querySelector('header').classList.toggle('dark-mode');
      document.querySelector('footer').classList.toggle('dark-mode');
      document.querySelector('.container').classList.toggle('dark-mode');
      localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
    }

    function checkDarkMode() {
      if (localStorage.getItem('darkMode') === 'true') {
        toggleDarkMode();
      }
    }

    window.onload = function () {
      checkDarkMode();
    };
  </script>
</body>
</html>
