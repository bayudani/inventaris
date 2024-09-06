<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web INTI</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .header {
        position: relative;
        width: 100%;
        min-height: 50vh;
        background-image: url('images/Gedung TI.jpg');
        background-size: cover;
        background-position: center;
    }

    .header h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 2em;
        /* Mengurangi ukuran font */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        text-align: center;
    }

    .navbar {
        background-color: #0044cc;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .navbar .left-menu {
        display: flex;
        align-items: center;
    }

    .navbar .left-menu a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        margin-right: 10px;
        font-size: 16px;
    }

    .navbar .left-menu a:hover {
        background-color: #002a80;
    }

    .navbar .right-menu {
        display: flex;
        align-items: center;
    }

    .navbar .right-menu .sign-in-btn {
        background-color: #0044cc;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
        font-size: 16px;
    }

    .navbar .right-menu .sign-in-btn:hover {
        background-color: #002a80;
    }

    .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px auto;
        max-width: 1200px;
    }

    .feature-box {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 45%;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s;
        margin-bottom: 20px;
    }

    .feature-box:hover {
        transform: scale(1.05);
    }

    .feature-box h3 {
        margin-top: 0;
        color: #0044cc;
    }

    .content {
        padding: 20px;
        background-color: white;
        margin: 20px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        text-align: center;
    }

    .additional-info {
        background-color: #0044cc;
        padding: 20px;
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
        color: white;
        flex-wrap: wrap;
    }

    .info-section,
    .blog,
    .terms,
    .social-media {
        flex: 1 1 250px;
        margin: 10px;
    }

    .info-section h3,
    .blog h3,
    .terms h3,
    .social-media h3 {
        color: white;
    }

    .info-section ul,
    .blog p,
    .terms ul,
    .social-media ul {
        list-style-type: none;
        padding: 0;
    }

    .info-section ul li,
    .blog p,
    .terms ul li,
    .social-media ul li {
        margin-bottom: 10px;
    }

    .social-media a {
        color: white;
        text-decoration: none;
    }

    .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px 0;
        clear: both;
    }

    .footer p {
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="left-menu">
            <a href="home.php">Home</a>
            <a href="#" onclick="location.href='#'">Profil</a>
            <a href="#" onclick="location.href='#'">Informasi</a>
        </div>
        <div class="right-menu">
            <button class="sign-in-btn" onclick="location.href='login.php'">Sign In</button>
        </div>
    </div>
    <div class="header">
        <h1>Selamat Datang di Web Inventaris Peminjaman Ruangan TI Politeknik Negeri Bengkalis</h1>
    </div>
    <div class="features">
        <div class="feature-box" onclick="location.href='dashboard.php'">
            <h3>Dashboard</h3>
            <p>Lihat daftar inventaris kami</p>
        </div>
        <div class="feature-box" onclick="location.href='contact.php'">
            <h3>Peminjaman</h3>
            <p>Hubungi kami untuk informasi lebih lanjut</p>
        </div>
        <div class="feature-box" onclick="location.href='#'">
            <h3>Status</h3>
            <p>Jelajahi fitur lainnya di web kami</p>
        </div>
        <div class="feature-box" onclick="location.href='data.php'">
            <h3>Data Inventaris</h3>
            <p>Temukan fitur tambahan di sini</p>
        </div>
    </div>
    <div class="content">
        <h2>Inventaris Peminjaman Ruangan Gedung TI</h2>
        <p>Selamat datang di halaman utama web Inventaris Peminjaman Ruangan Gedung TI.</p>
    </div>
    <div class="additional-info">
        <div class="info-section">
            <h3>TI Poleng</h3>
            <ul>
                <li>Alamat: Jl. Bathin Alam, Bengkalis Riau-28711</li>
                <li>Telepon: (+62766) 24566/24577</li>
                <li>Email: info@polbeng.ac.id</li>
            </ul>
        </div>
        <div class="blog">
            <h3>Blog</h3>
            <p>Temukan berita terbaru seputar kampus kami di <a href="#">blog kami</a>.</p>
        </div>
        <div class="te