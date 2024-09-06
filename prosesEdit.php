<?php
// Pastikan request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'inti');

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari form
    $id = $_POST['id'];
    $Nama_ruangan = $_POST['Nama_ruangan'];
    $nama = $_POST['nama'];
    $Status = $_POST['Status'];
    $Nim = $_POST['Nim'];
    $Kelas = $_POST['Kelas'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $waktu_pengembalian = $_POST['waktu_pengembalian'];

    // Query untuk update data
    $sql = "UPDATE riwayat_peminjaman SET Nama_ruangan='$Nama_ruangan', nama='$nama', Status='$Status', Nim='$Nim', Kelas='$Kelas', tanggal_peminjaman='$tanggal_peminjaman', waktu_pengembalian='$waktu_pengembalian' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman data peminjaman setelah berhasil update
        header("Location: tabel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}
?>
