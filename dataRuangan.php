<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Group Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-group-vertical .btn {
            margin-bottom: 20px; /* Menambahkan jarak antar tombol */
            font-size: 1.25rem; /* Memperbesar ukuran huruf */
        }
    </style>
</head>
<body>
    <div class="container mt-5 text-center">
        <h2>Nama-Nama Ruangan di Gedung TI</h2> <!-- Menambahkan judul -->
        <div class="d-flex justify-content-center mt-4">
            <div class="btn-group-vertical" role="group" aria-label="Programming Topics">
                <a href="tabel.php" class="btn btn-primary">Pemrograman</a>
                <a href="link-multimedia.html" class="btn btn-secondary">Multimedia</a>
                <a href="link-sistem-informasi.html" class="btn btn-success">Sistem Informasi dan Basis data</a>
                <a href="link-iot.html" class="btn btn-danger">IoT</a>
                <a href="link-software-development.html" class="btn btn-warning">Software Development</a>
                <a href="link-artificial-intelligence.html" class="btn btn-info">Artificial Intelligence</a>
                <a href="link-keamanan-informasi.html" class="btn btn-light">Keamanan Informasi</a>
                <a href="link-jaringan-komputer.html" class="btn btn-dark">Jaringan Komputer</a>
                <a href="link-hpc.html" class="btn btn-primary">HPC</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
