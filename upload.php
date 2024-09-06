<?php
// Pastikan form di-post dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan ada file yang diunggah
    if (isset($_FILES["fileFoto"]) && $_FILES["fileFoto"]["error"] == UPLOAD_ERR_OK) {
        $nama_file = $_FILES["fileFoto"]["name"];
        $ukuran_file = $_FILES["fileFoto"]["size"];
        $tmp_file = $_FILES["fileFoto"]["tmp_name"];
        
        // Tentukan lokasi penyimpanan file
        $lokasi_simpan = "uploads/"; // Ganti dengan direktori yang sesuai di server Anda
        
        // Pindahkan file ke lokasi yang ditentukan
        if (move_uploaded_file($tmp_file, $lokasi_simpan . $nama_file)) {
            echo "File berhasil diunggah.";
            
            // Simpan lokasi file ke database untuk user yang sedang login
            session_start(); // Pastikan session telah dimulai
            $user_id = $_SESSION['user_id']; // Sesuaikan dengan cara Anda menyimpan session user_id
            
            // Lakukan koneksi ke database
            $koneksi = new mysqli("localhost", "username", "password", "nama_database"); // Sesuaikan dengan informasi koneksi Anda
            
            // Escape variabel untuk menghindari SQL Injection
            $lokasi_file_db = $koneksi->real_escape_string($lokasi_simpan . $nama_file);
            $user_id = $koneksi->real_escape_string($user_id);
            
            // Query untuk update kolom profile_picture di tabel user
            $query = "UPDATE user SET profile_picture = '$lokasi_file_db' WHERE id = $user_id";
            $result = $koneksi->query($query);
            
            if ($result) {
                echo "Data foto profil berhasil disimpan ke database.";
            } else {
                echo "Gagal menyimpan data foto profil ke database.";
            }
            
            // Tutup koneksi database
            $koneksi->close();
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Error: " . $_FILES["fileFoto"]["error"];
    }
}
?>
