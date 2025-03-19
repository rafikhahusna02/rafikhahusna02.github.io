<DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital Rafikha</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; }
        .navbar { background-color: #007bff; padding: 15px; text-align: center; }
        .navbar a { color: white; text-decoration: none; padding: 15px; }
        .container { max-width: 800px; margin: auto; padding: 20px; text-align: center; }
        .slideshow { position: relative; max-width: 100%; margin: auto; }
        .slides { display: none; width: 100%; border-radius: 10px; }
        .active { display: block; }
        .footer { background-color: #007bff; color: white; text-align: center; padding: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#contact">Contact Us</a>
    </div>
    
    <div class="container" id="home">
        <h1>Selamat Datang di Perpustakaan Digital Rafikha</h1>
        <p>Tempat terbaik untuk mendapatkan referensi buku digital.</p>
        <div class="slideshow">
            <img class="slides active" src="https://via.placeholder.com/800x400/007bff/ffffff?text=Slide+1" alt="Slide 1">
            <img class="slides" src="https://via.placeholder.com/800x400/28a745/ffffff?text=Slide+2" alt="Slide 2">
            <img class="slides" src="https://via.placeholder.com/800x400/dc3545/ffffff?text=Slide+3" alt="Slide 3">
        </div>
    </div>
    
    <div class="container" id="about">
        <h2>About Me</h2>
        <table border="1" width="100%">
            <tr><th>Nama</th><td>Rafikha Husna</td></tr>
            <tr><th>Universitas</th><td>Universitas XYZ</td></tr>
            <tr><th>Jurusan</th><td>Ilmu Perpustakaan</td></tr>
        </table>
    </div>
    
    <div class="container" id="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:rafikha@example.com">rafikha@example.com</a></p>
        <p>Telepon: +62 812-3456-7890</p>
    </div>
    
    <div class="footer">
        <p>&copy; 2025 Perpustakaan Digital Rafikha</p>
    </div>
    
    <script>
        let slideIndex = 0;
        function showSlides() {
            let slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].classList.add("active");
            setTimeout(showSlides, 3000);
        }
        showSlides();
    </script>
</body>
</html>
