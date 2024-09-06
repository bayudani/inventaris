<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'inti');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari database
$sql = "SELECT * FROM riwayat_peminjaman";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>Data Peminjaman</h2>
            <a href="dashboardAdmin.php" class="btn btn-primary">Kembali</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Ruangan</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>NIM/NIP</th>
                    <th>Kelas</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Jam Peminjaman</th>
                    <th>Waktu Pengembalian</th>
                    <th>Aksi</th> <!-- Kolom Aksi -->
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Format tanggal peminjaman
                    $tanggal_peminjaman = isset($row["tanggal_peminjaman"]) ? date('Y-m-d ', strtotime($row["tanggal_peminjaman"])) : '';

                    // Format waktu pengembalian
                    $waktu_pengembalian = isset($row["waktu_pengembalian"]) ? new DateTime($row["waktu_pengembalian"]) : new DateTime();
                    $formatted_waktu_pengembalian = $waktu_pengembalian->format('H:i:s');

                    // Jam peminjaman
                    $jam_peminjaman = isset($row["jam_peminjaman"]) ? $row["jam_peminjaman"] : '';

                    echo "<tr>
                            <td>" . $row["Nama_ruangan"]. "</td>
                            <td>" . $row["nama"]. "</td>
                            <td>" . $row["Status"]. "</td>
                            <td>" . $row["Nim"]. "</td>
                            <td>" . $row["Kelas"]. "</td>
                            <td>" . $tanggal_peminjaman . "</td>
                            <td>" . $jam_peminjaman . "</td>
                            <td>" . $formatted_waktu_pengembalian . "</td>
                            <td>
                                <div class='btn-group' role='group'>
                                    <a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm mr-1'>Edit</a>
                                    <form action='hapus.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' class='btn btn-danger btn-sm mr-1' onclick='return confirm(\"Anda yakin ingin menghapus data ini?\")'>Delete</button>
                                    </form>
                                    <form action='proseskonfirmasi.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' name='action' value='tolak' class='btn btn-danger btn-sm mr-1' onclick='return confirm(\"Anda yakin ingin menolak peminjaman ini?\")'>Tolak</button>
                                    </form>
                                    <form action='proseskonfirmasi.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' name='action' value='terima' class='btn btn-success btn-sm mr-1'>Terima</button>
                                    </form>
                                    <form action='proseskonfirmasi.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' name='action' value='selesai' class='btn btn-info btn-sm'>Selesai</button>
                                    </form>
                                </div>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9' class='text-center'>Tidak ada data</td></tr>";
            }
            $conn->close();
            ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
