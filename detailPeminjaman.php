<?php
session_start();
require 'koneksi.php'; // Sesuaikan dengan file koneksi Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $Nama_ruangan = isset($_POST['Nama_ruangan']) ? $_POST['Nama_ruangan'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $Status = isset($_POST['Status']) ? $_POST['Status'] : '';
    $Nim = isset($_POST['Nim']) ? $_POST['Nim'] : '';
    $Kelas = isset($_POST['Kelas']) ? $_POST['Kelas'] : '';
    $tanggal_peminjaman = isset($_POST['tanggal_peminjaman']) ? $_POST['tanggal_peminjaman'] : '';
    $jam_peminjaman = isset($_POST['jam_peminjaman']) ? $_POST['jam_peminjaman'] : '';
    $waktu_pengembalian = isset($_POST['waktu_pengembalian']) ? $_POST['waktu_pengembalian'] : '';

    // Upload KTM
    $foto_ktm = $_FILES['ktm']['name'];
    $ktm_tmp = $_FILES['ktm']['tmp_name'];
    $foto_ktm_path = "uploads/" . basename($foto_ktm);

    // Buat direktori jika belum ada
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // Pindahkan file yang diunggah ke direktori uploads
    if (move_uploaded_file($ktm_tmp, $foto_ktm_path)) {
        // Siapkan query untuk memasukkan data ke database
        $sql = "INSERT INTO riwayat_peminjaman (Nama_ruangan, nama, Status, Nim, Kelas, foto_ktm, tanggal_peminjaman, jam_peminjaman, waktu_pengembalian) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameter ke query
        $stmt->bind_param("sssssssss", $Nama_ruangan, $nama, $Status, $Nim, $Kelas, $foto_ktm_path, $tanggal_peminjaman, $jam_peminjaman, $waktu_pengembalian);

        // Eksekusi query
        if ($stmt->execute()) {
            $success_message = "Peminjaman ruangan berhasil direkam.";
        } else {
            $error_message = "Terjadi kesalahan dalam menyimpan data peminjaman: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        $error_message = "Terjadi kesalahan dalam mengunggah file KTM.";
    }

    // Tutup koneksi database
    $conn->close();
} else {
    // Redirect jika akses langsung ke script ini
    header("Location: formpeminjaman.php");
    exit;
}

// Setel nilai default jika data belum di-set
if (!isset($Nama_ruangan)) {
    $Nama_ruangan = '';
}
if (!isset($nama)) {
    $nama = '';
}
if (!isset($Status)) {
    $Status = '';
}
if (!isset($Nim)) {
    $Nim = '';
}
if (!isset($Kelas)) {
    $Kelas = '';
}
if (!isset($tanggal_peminjaman)) {
    $tanggal_peminjaman = '';
}
if (!isset($jam_peminjaman)) {
    $jam_peminjaman = '';
}
if (!isset($waktu_pengembalian)) {
    $waktu_pengembalian = '';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman Ruangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0044cc;
        }

        .message {
            margin-bottom: 20px;
            text-align: center;
            padding: 10px;
            background-color: #e0f7fa;
            border: 1px solid #0044cc;
            border-radius: 4px;
        }

        .message.error {
            background-color: #ffcdd2;
            border-color: #f44336;
        }

        .message.success {
            background-color: #c8e6c9;
            border-color: #4caf50;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #0044cc;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #003366;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Peminjaman Ruangan</h2>
        <?php if (isset($success_message)) : ?>
            <div class="message success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($error_message)) : ?>
            <div class="message error">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <p><strong>Nama Ruangan:</strong> <?php echo htmlspecialchars($Nama_ruangan); ?></p>
        <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
        <p><strong>Status:</strong> <?php echo htmlspecialchars($Status); ?></p>
        <p><strong>NIM/NIP:</strong> <?php echo htmlspecialchars($Nim); ?></p>
        <p><strong>Kelas:</strong> <?php echo htmlspecialchars($Kelas); ?></p>
        <p><strong>KTM:</strong> <img src="<?php echo $foto_ktm_path; ?>" alt="KTM"></p>
        <p><strong>Tanggal Peminjaman:</strong> <?php echo htmlspecialchars($tanggal_peminjaman); ?></p>
        <p><strong>Jam Peminjaman:</strong> <?php echo htmlspecialchars($jam_peminjaman); ?></p>
        <p><strong>Waktu Pengembalian:</strong> <?php echo htmlspecialchars($waktu_pengembalian); ?></p>
        <a href="dashboard.php" class="btn">Kembali</a>
    </div>
</body>
</html>
