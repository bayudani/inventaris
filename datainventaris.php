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

        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
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

        .table-container {
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            clear: both;
        }

        .btn-kembali {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <button class="profile-btn" onclick="location.href='profile.php'">Profil</button>
        <button class="info-btn" onclick="location.href='Tentang.php'">Tentang</button>
        <a href="dashboard.php" class="btn btn-secondary btn-kembali">Kembali</a>
    </div>

    <div class="container">
        <div class="content">
            <div class="dashboard-header">
                <h1>Data Inventaris</h1>
            </div>
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Labor</th>
                            <th scope="col">Laboran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jaringan Komputer dan Informasi</td>
                            <td>Dedi Hermawan A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Jaringan Komputer dan Informasi'">Pinjam</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sistem Informasi dan Basis Data</td>
                            <td>Adelia Fitriyani A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Sistem Informasi dan Basis Data'">Pinjam</button>
                            </td>
                        </tr>
                        <tr>
                            <td>HPC</td>
                            <td>Ayu Rahmadhani S.Kom</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=HPC'">Pinjam</button></td>
                        </tr>
                        <tr>
                            <td>Artificial Intelligence</td>
                            <td>Isna Yulia, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Artificial Intelligence'">Pinjam</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Software Development</td>
                            <td>Nurhimaddin, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Software Development'">Pinjam</button></td>
                        </tr>
                        <tr>
                            <td>IoT</td>
                            <td>Khairus Suhada, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=IoT'">Pinjam</button></td>
                        </tr>
                        <tr>
                            <td>Pemrograman</td>
                            <td>Wiwin Saputra, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Pemrograman'">Pinjam</button></td>
                        </tr>
                        <tr>
                            <td>Keamanan Informasi</td>
                            <td>Isna Yulia, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Keamanan Informasi'">Pinjam</button></td>
                        </tr>
                        <tr>
                            <td>Multimedia</td>
                            <td>Supendi, A.Md</td>
                            <td><button class="btn btn-primary btn-sm"
                                    onclick="location.href='formpeminjaman.php?labor=Multimedia'">Pinjam</button></td>
                        </tr>
                    </tbody>
                </table>
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