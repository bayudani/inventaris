<?php
session_start(); // Pastikan session sudah dimulai
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'default';

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inti";
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data riwayat peminjaman
$sql = "SELECT Nama_ruangan, nama, Status, Nim, Kelas, tanggal_peminjaman, jam_peminjaman, waktu_pengembalian, keterangan, foto_ktm FROM riwayat_peminjaman";
$result = $conn->query($sql);

// Tentukan URL kembali berdasarkan peran
$back_url = '';
switch ($role) {
    case 'laboran':
        $back_url = 'dashboardAdmin.php';
        break;
    case 'mahasiswa':
        $back_url = 'dashboard.php';
        break;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- File CSS eksternal -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .ktm-img {
            max-width: 100px;
            height: auto;
        }

        .keterangan-accepted {
            background-color: #d4edda;
            color: #155724;
        }

        .keterangan-rejected {
            background-color: #f8d7da;
            color: #721c24;
        }

        .keterangan-selesai {
            background-color: #cce5ff;
            color: #004085;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Peminjaman</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Nama Ruangan</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Nim/Nip</th>
                    <th>Kelas</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Jam Peminjaman</th>
                    <th>Waktu Pengembalian</th>
                    <th class="ktm-column">KTM</th>
                    <th class="keterangan-column">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $statusClasses = [
                        'Diterima' => 'keterangan-accepted',
                        'Ditolak' => 'keterangan-rejected',
                        'Selesai' => 'keterangan-selesai'
                    ];

                    while ($row = $result->fetch_assoc()) {
                        $statusClass = isset($statusClasses[$row["keterangan"]]) ? $statusClasses[$row["keterangan"]] : '';
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($row["Nama_ruangan"]) ?></td>
                            <td><?= htmlspecialchars($row["nama"]) ?></td>
                            <td><?= htmlspecialchars($row["Status"]) ?></td>
                            <td><?= htmlspecialchars($row["Nim"]) ?></td>
                            <td><?= htmlspecialchars($row["Kelas"]) ?></td>
                            <td><?= htmlspecialchars($row["tanggal_peminjaman"]) ?></td>
                            <td><?= htmlspecialchars($row["jam_peminjaman"]) ?></td>
                            <td><?= htmlspecialchars(date('H:i', strtotime($row["waktu_pengembalian"]))) ?></td>
                            <td class='ktm-column'><img src='<?= htmlspecialchars($row["foto_ktm"]) ?>' class='ktm-img' alt='KTM'></td>
                            <td class='keterangan-column <?= $statusClass ?>'><?= htmlspecialchars($row["keterangan"]) ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='10'>Tidak ada data riwayat peminjaman.</td></tr>";
                }

                // Tutup koneksi database
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Tombol Kembali dengan Bootstrap -->
        <a href="<?= $back_url ?>" class="btn btn-primary btn-back">Kembali</a>

    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
