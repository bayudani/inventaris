<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Ruangan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #007bff; /* Ubah warna background menjadi biru */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white; /* Ubah warna teks menjadi putih */
        }

        h2 {
            text-align: center;
            color: #ffffff; /* Sesuaikan warna teks judul */
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #ffffff; /* Sesuaikan warna teks label */
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        .waktu-peminjaman {
            margin-bottom: 40px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #0044cc; /* Sesuaikan warna background tombol Submit */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #002a80; /* Sesuaikan warna background tombol Submit saat dihover */
        }

        .btn-back {
            padding: 10px 20px;
            background-color: #6c757d; /* Sesuaikan warna background tombol Kembali */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            margin-top: 10px;
        }

        .btn-back:hover {
            background-color: #5a6268; /* Sesuaikan warna background tombol Kembali saat dihover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Peminjaman Ruangan</h2>
        <form action="detailPeminjaman.php" method="post" enctype="multipart/form-data">
            <label for="Nama_ruangan">Nama Ruangan</label>
            <input type="text" id="Nama_ruangan" name="Nama_ruangan" required class="form-control">

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required class="form-control">

            <label for="Status">Status</label>
            <select id="Status" name="Status" required class="form-control">
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
            </select>

            <label for="Nim">NIM/NIP</label>
            <input type="text" id="Nim" name="Nim" required class="form-control">

            <label for="Kelas">Kelas</label>
            <input type="text" id="Kelas" name="Kelas" required class="form-control">

            <label for="ktm">Upload KTM (Kartu Tanda Mahasiswa)</label>
            <input type="file" id="ktm" name="ktm" accept=".pdf, .jpg, .png" required class="form-control-file">

            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" required class="form-control">

            <label for="jam_peminjaman">Jam Peminjaman</label>
            <input type="time" id="jam_peminjaman" name="jam_peminjaman" required class="form-control">


            <label for="waktu_pengembalian">Waktu Pengembalian</label>
            <input type="datetime" id="waktu_pengembalian" name="waktu_pengembalian" pattern="[0-9]{2}:[0-9]{2}"
                placeholder="HH:MM" required class="form-control">

            <input type="submit" value="Submit" class="btn btn-primary">
        </form>

        <!-- Tombol Kembali -->
        <a href="dashboard.php" class="btn btn-secondary btn-back">Kembali</a>
    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
