<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peminjaman</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Peminjaman</h2>
        <?php
        // Ambil id peminjaman dari URL
        $id = $_GET['id'];

        // Koneksi ke database
        $conn = new mysqli('localhost', 'root', '', 'inti');

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data peminjaman berdasarkan id
        $sql = "SELECT * FROM riwayat_peminjaman WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Menampilkan form edit dengan data yang sudah ada
            $row = $result->fetch_assoc();
            ?>
            <form action="prosesEdit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="Nama_ruangan">Nama Ruangan</label>
                    <input type="text" class="form-control" id="Nama_ruangan" name="Nama_ruangan" value="<?php echo $row['Nama_ruangan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" id="Status" name="Status" required>
                        <option value="Mahasiswa" <?php if ($row['Status'] == 'Mahasiswa') echo 'selected'; ?>>Mahasiswa</option>
                        <option value="Dosen" <?php if ($row['Status'] == 'Dosen') echo 'selected'; ?>>Dosen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Nim">NIM/NIP</label>
                    <input type="text" class="form-control" id="Nim" name="Nim" value="<?php echo $row['Nim']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <input type="text" class="form-control" id="Kelas" name="Kelas" value="<?php echo $row['Kelas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php echo $row['tanggal_peminjaman']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="waktu_pengembalian">Waktu Pengembalian</label>
                    <input type="time" class="form-control" id="waktu_pengembalian" name="waktu_pengembalian" value="<?php echo $row['waktu_pengembalian']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <?php
        } else {
            echo "Data tidak ditemukan.";
        }

        // Tutup koneksi database
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
