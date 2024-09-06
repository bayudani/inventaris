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
            color: #333; /* Warna teks utama */
        }

        .header {
            position: relative;
            width: 100%;
            min-height: 50vh;
            background-image: url('images/Gedung TI.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .header-content {
            max-width: 800px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
            border-radius: 8px;
        }

        .navbar {
            background-color: #0044cc;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: white;
        }

        .navbar .left-menu a {
            text-decoration: none;
            padding: 10px 15px;
            margin-right: 10px;
            color: white;
            font-weight: bold;
        }

        .navbar .left-menu a:hover {
            background-color: #002a80;
            border-radius: 5px;
        }

        .navbar .right-menu button {
            color: white;
            background-color: #0044cc;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .navbar .right-menu button:hover {
            background-color: #002a80;
        }

        .content {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: justify;
            line-height: 1.6;
        }

        .content p {
            text-align: center;
        }

        .additional-info {
            background-color: #0044cc;
            color: white;
            padding: 20px;
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .info-section h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .info-section ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 0;
        }

        .info-section ul li {
            margin-bottom: 5px;
        }

        .blog p {
            margin: 0;
        }

        .blog a {
            color: white;
            text-decoration: none;
            font-weight: bold;
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
            <a href="Tentang.php">Tentang</a>
        </div>
        <div class="right-menu">
            <button onclick="location.href='registrasi.php'">Sign In</button>
            <button onclick="location.href='login.php'">Login</button>
        </div>
    </div>

    <div class="header">
        <div class="header-content">
            <h1>Selamat Datang di Web Inventaris Peminjaman Ruangan TI Politeknik Negeri Bengkalis</h1>
        </div>
    </div>

    <div class="content">
        <h2 style="text-align: center;">Teknik Informatika</h2>
        <p>Jurusan Teknik Informatika (JTI) merupakan salah satu jurusan yang ada di Politeknik Negeri Bengkalis
            berdasarkan Peraturan Menteri Pendidikan Nasional No 28 Tahun 2011 tentang pendirian organisasi dan tata
            kerja Politeknik Negeri Bengkalis (OTK Polbeng). Sebelumnya JTI merupakan salah satu program studi Teknik
            Informatika dari tujuh program studi yang ada di Politeknik Bengkalis (Polbeng). Seluruh kegiatan pada JTI
            dipimpin oleh ketua jurusan dibantu oleh sekretaris jurusan, ketua program studi, dosen, kepala laboratorium,
            tenaga laboran dan staf administrasi.</p>
        <p>Jurusan TI-Polbeng memiliki 8 Lab yang memiliki spesifikasi peralatan dan keilmuan yang berbeda.</p>
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
            <p>Temukan berita terbaru seputar kampus kami di <a href="https://polbeng.ac.id/">blog kami</a>.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Politeknik Negeri Bengkalis</p>
    </div>
</body>

</html>
