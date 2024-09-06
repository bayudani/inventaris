<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            
        }

        .navbar {
            background-color: #0044cc;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            padding: 14px 20px;
        }

        .navbar a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #002a80;
        }

        .content {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-right">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <div class="content">
        <h2>Selamat datang, Laboran!</h2>
        <p>Di sini Anda dapat mengelola:</p>

        <!-- Isi dari masing-masing menu -->
        <div id="riwayat">
            <h3>Riwayat Peminjaman</h3>
            <!-- Isi konten riwayat peminjaman disini -->
            <a href="RiwayatAdmin.php" class="btn btn-primary">Lihat Riwayat Peminjaman</a>
        </div>
        <br>

        <div id="inventaris">
            <h3>Data Peminjaman</h3>
            <!-- Isi konten data inventaris disini -->
            <a href="tabel.php" class="btn btn-warning">Lihat Data Peminjaman</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
