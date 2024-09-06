<?php
session_start(); // Pastikan session sudah dimulai
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'default';

// Periksa apakah role yang masuk merupakan laboran
if ($role !== 'laboran') {
    // Jika bukan, arahkan kembali ke dashboard dengan pesan error
    header("Location: dashboard.php?error=Unauthorized Access");
    exit(); // Pastikan tidak ada output lain sebelum redirect
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari form
$id = $_POST['id'];
$action = $_POST['action']; // 'terima', 'tolak', atau 'selesai'

// Update status peminjaman berdasarkan tindakan
if ($action == 'terima') {
    $sql = "UPDATE riwayat_peminjaman SET keterangan = 'Diterima' WHERE id = $id";
    $message = "Peminjaman telah diterima.";
} elseif ($action == 'tolak') {
    $sql = "UPDATE riwayat_peminjaman SET keterangan = 'Ditolak' WHERE id = $id";
    $message = "Peminjaman telah ditolak.";
} elseif ($action == 'selesai') {
    $sql = "UPDATE riwayat_peminjaman SET keterangan = 'Selesai' WHERE id = $id";
    $message = "Peminjaman telah selesai.";
}

if ($conn->query($sql) === TRUE) {
    // Redirect back to the previous page with a message
    header("Location: konfirmasi.php?message=" . urlencode($message));
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
