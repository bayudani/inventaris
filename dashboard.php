<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Web Inventaris Peminjaman Ruangan TI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .navbar {
            background-color: #0044cc;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: start;
            padding: 10px 20px;
        }

        .navbar a,
        .navbar button {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            border: none;
            background: none;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        .navbar a:hover,
        .navbar button:hover {
            background-color: #002a80;
        }

        .navbar .ml-auto {
            margin-left: auto;
        }

        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .feature-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .feature-box:hover {
            transform: scale(1.05);
        }

        .feature-box h3 {
            color: #007bff;
        }

        .feature-box p {
            color: #333;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            clear: both;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <button class="tantang-btn" onclick="location.href='Tentang.php'">Tentang</button>
        <a href="profile.php" class="profile-btn ml-auto">Profile</a>
        <a href="login.php" class="logout-btn">Logout</a>
    </div>

    <header class="dashboard-header">
        <div class="container">
            <h1 class="display-4">Dashboard - Web Inventaris Peminjaman Ruangan TI</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="feature-box" onclick="location.href='riwayatPengguna.php'">
                    <h3>Riwayat Peminjaman</h3>
                    <p>Lihat riwayat peminjaman ruangan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box" onclick="location.href='konfirmasi.php'">
                    <h3>Konfirmasi Peminjaman</h3>
                    <p>Konfirmasi peminjaman yang perlu diproses</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box" onclick="location.href='datainventaris.php'">
                    <h3>Data Inventaris</h3>
                    <p>Manajemen data inventaris ruangan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box" onclick="location.href='formpeminjaman.php'">
                    <h3>Form Peminjaman</h3>
                    <p>Isi Form Peminjaman</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 TI Politeknik Negeri Bengkalis. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
