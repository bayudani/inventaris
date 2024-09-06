<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman Laboratorium</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #0044cc;
    }

    .detail-group {
        margin-bottom: 15px;
    }

    .detail-group label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #0044cc;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #002a80;
    }

    .ktm-img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Detail Peminjaman Laboratorium</h2>
        <div class="detail-group">
            <label>Nama Mahasiswa:</label>
            <p><?php echo $_GET['studentName']; ?></p>
        </div>
        <div class="detail-group">
            <label>NIM:</label>
            <p><?php echo $_GET['studentNIM']; ?></p>
        </div>
        <div class="detail-group">
            <label>Program Studi:</label>
            <p><?php echo $_GET['studentProgram']; ?></p>
        </div>
        <div class="detail-group">
            <label>Waktu Peminjaman:</label>
            <p><?php echo $_GET['borrowTime']; ?></p>
        </div>
        <div class="detail-group">
            <label>KTM:</label>
            <?php
                $ktmFileName = $_GET['ktmUpload'];
                $ktmFilePath = 'uploads/' . $ktmFileName; // Sesuaikan dengan path yang benar
            ?>
            <img src="<?php echo $ktmFilePath; ?>" class="ktm-img" alt="KTM">
        </div>
        <div class="status status-pending" id="status">
            Menunggu Konfirmasi
        </div>
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>