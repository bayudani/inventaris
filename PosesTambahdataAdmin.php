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

// Tangkap data yang dikirim dari form
$jenis_peminjaman = $_POST['jenis_peminjaman'];
$nama = $_POST['nama'];
$no_id = $_POST['no_id'];
$status_peminjaman = $_POST['status_peminjaman'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$waktu_pengembalian = $_POST['waktu_pengembalian'];

// Query untuk memasukkan data ke dalam tabel riwayat_peminjaman
$sql = "INSERT INTO riwayat_peminjaman (jenis_peminjaman, nama, no_id, status_peminjaman, tanggal_peminjaman, waktu_pengembalian)
        VALUES ('$jenis_peminjaman', '$nama', '$no_id', '$status_peminjaman', '$tanggal_peminjaman', '$waktu_pengembalian')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
