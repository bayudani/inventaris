<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'inti');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap nilai ID dari form sebelumnya
$id = isset($_POST['id']) ? $_POST['id'] : '';

// Proses tolak peminjaman jika ID terdefinisi
if ($id) {
    // Lakukan proses tolak peminjaman
    // Contoh query update status
    $sql = "UPDATE riwayat_peminjaman SET Status='Ditolak' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Panggil fungsi untuk mengirim notifikasi ke mahasiswa (contoh fungsi)
        sendNotification($id, 'Ditolak');

        // Redirect ke halaman konfirmasi dengan pesan
        header("Location: konfirmasi.php?id=$id&action=tolak");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

// Fungsi contoh untuk mengirim notifikasi ke mahasiswa
function sendNotification($id, $status) {
    // Lakukan sesuai dengan implementasi notifikasi yang Anda inginkan
    // Contoh: Kirim email, push notification, atau update status di halaman mahasiswa
    // Implementasi ini bisa disesuaikan dengan sistem notifikasi yang Anda gunakan.
}
?>
