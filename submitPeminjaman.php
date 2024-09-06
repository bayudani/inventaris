<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root"; // sesuaikan dengan username MySQL Anda
$password = ""; // sesuaikan dengan password MySQL Anda
$dbname = "inti";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama_ruangan = $_POST['Nama_Ruangan'];
$nama = $_POST['nama'];
$status = $_POST['Status'];
$nim = $_POST['Nim'];
$kelas = $_POST['Kelas'];
$tanggal_peminjaman = $_POST['tanggal-peminjaman'];
$waktu_pengembalian = $_POST['waktu-pengembalian'];

// Query untuk memasukkan data ke dalam tabel peminjaman
$sql = "INSERT INTO riwayat_peminjaman (Nama_Ruangan, nama, Status, Nim, kelas, tanggal_peminjaman, waktu_pengembalian)
VALUES ('$nama_ruangan', '$nama', '$status', '$nim', '$kelas', '$tanggal_peminjaman', '$waktu_pengembalian')";

if ($conn->query($sql) === TRUE) {
    echo "Peminjaman berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
