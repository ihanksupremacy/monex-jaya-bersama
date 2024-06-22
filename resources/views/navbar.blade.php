<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/navbar/style.css">

    <title>Navbar</title>
    
</head>
<body>
    <nav>
        <div class="logo"><a href="/"><img src="/img/assets/logo.png" alt=""></a></div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="menu" id="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/jenismobil">Jenis Mobil</a></li>
            <li><a href="/galeri">Galeri</a></li>
            <li><a href="/tentangkami">Tentang Kami</a></li>
            <li><a href="kontak">Kontak</a></li>
        </ul>
    </nav>

    <script> 
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }
    </script>
</body>
</html>
