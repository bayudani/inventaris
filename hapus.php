<?php
// Pastikan request adalah POST dan terdapat ID yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'inti');

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil ID dari form
    $id = $_POST['id'];

    // Query untuk hapus data berdasarkan ID
    $sql = "DELETE FROM riwayat_peminjaman WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman data peminjaman setelah berhasil hapus
        header("Location: tabel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
} else {
    // Jika tidak ada ID atau tidak ada request POST, kembalikan ke halaman sebelumnya
    header("Location: dataPeminjaman.php");
    exit();
}
?>
