<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peminjaman Laboratorium</title>
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

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Formulir Peminjaman Laboratorium</h2>
        <form id="borrowForm" action="detailPeminjaman.php" method="GET" enctype="multipart/form-data">
            <div class="form-group">
                <label for="studentName">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Masukkan Nama"
                    required>
            </div>
            <div class="form-group">
                <label for="studentNIM">NIM</label>
                <input type="text" class="form-control" id="studentNIM" name="studentNIM" placeholder="Masukkan NIM"
                    required>
            </div>
            <div class="form-group">
                <label for="studentProgram">Program Studi</label>
                <input type="text" class="form-control" id="studentProgram" name="studentProgram"
                    placeholder="Masukkan Program Studi" required>
            </div>
            <div class="form-group">
                <label for="borrowTime">Waktu Peminjaman</label>
                <input type="datetime-local" class="form-control" id="borrowTime" name="borrowTime" required>
            </div>
            <div class="form-group">
                <label for="ktmUpload">Unggah KTM</label>
                <input type="file" class="form-control-file" id="ktmUpload" name="ktmUpload" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>