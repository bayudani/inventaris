<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-back {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .ktm-img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Riwayat Peminjaman</h2>
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
                    <th>KTM</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Lakukan koneksi ke database (misal menggunakan mysqli)
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "inti";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil data riwayat peminjaman
                $sql = "SELECT Nama_ruangan, nama, Status, Nim, Kelas, tanggal_peminjaman, jam_peminjaman, waktu_pengembalian, foto_ktm FROM riwayat_peminjaman";
                $result = $conn->query($sql);

                // Periksa apakah query berhasil dieksekusi
                if ($result->num_rows > 0) {
                    // Loop untuk menampilkan setiap baris data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Nama_ruangan"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["Status"] . "</td>";
                        echo "<td>" . $row["Nim"] . "</td>";
                        echo "<td>" . $row["Kelas"] . "</td>";
                        echo "<td>" . $row["tanggal_peminjaman"] . "</td>";
                        echo "<td>" . $row["jam_peminjaman"] . "</td>";
                        echo "<td>" . date('H:i', strtotime($row["waktu_pengembalian"])) . "</td>";
                        echo "<td><img src='" . $row["foto_ktm"] . "' class='ktm-img' alt='KTM'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>Tidak ada data riwayat peminjaman.</td></tr>";
                }

                // Tutup koneksi database
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Tombol Kembali dengan Bootstrap -->
        <a href="dashboardAdmin.php" class="btn btn-primary btn-back">Kembali</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
