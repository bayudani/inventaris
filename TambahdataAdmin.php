<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Peminjaman</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-submit {
            padding: 10px 20px;
            background-color: #0044cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #002a80;
        }

        .btn-kembali {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn-kembali">Kembali</a>
    <div class="form-container">
        <h2>Form Tambah Data Peminjaman</h2>
        <form action="proses_tambah.php" method="POST">
            <div class="form-group">
                <label for="jenis_peminjaman">Jenis Peminjaman:</label>
                <select name="jenis_peminjaman" id="jenis_peminjaman" class="form-control" required>
                    <option value="">Pilih Jenis Peminjaman</option>
                    <option value="Buku">Buku</option>
                    <option value="Alat">Alat</option>
                    <option value="Ruangan">Ruangan</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_id">Nomor ID:</label>
                <input type="text" id="no_id" name="no_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status_peminjaman">Status Peminjaman:</label>
                <select name="status_peminjaman" id="status_peminjaman" class="form-control" required>
                    <option value="">Pilih Status Peminjaman</option>
                    <option value="Sedang Diproses">Sedang Diproses</option>
                    <option value="Dipinjam">Dipinjam</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="waktu_pengembalian">Waktu Pengembalian:</label>
                <input type="datetime-local" id="waktu_pengembalian" name="waktu_pengembalian" class="form-control" required>
            </div>
            <div class="form-group">
            <a href="RiwayatAdmin.php" class="btn btn-primary">Tambah</a>
            </div>
        </form>
    </div>

    <!-- Tambahkan Bootstrap JS untuk fungsi-fungsi tambahan jika diperlukan -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
