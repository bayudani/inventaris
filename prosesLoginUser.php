<?php
// login_process.php
session_start();
include 'database_connection.php'; // Gantilah sesuai dengan koneksi database Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Query untuk mengecek apakah pengguna ada di database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect berdasarkan role
        if ($role == 'mahasiswa') {
            header("Location: mahasiswa_dashboard.php");
        } else if ($role == 'dosen') {
            header("Location: dosen_dashboard.php");
        }
    } else {
        echo "Nama pengguna atau kata sandi salah, atau role tidak sesuai.";
    }
}
?>