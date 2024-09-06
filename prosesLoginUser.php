<?php
// login_process.php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'inti');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa login
$sql = "SELECT * FROM user WHERE nama = ? AND role = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $role);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['nama'];
        $_SESSION['role'] = $user['role'];
        
        // Redirect berdasarkan role
        if ($role == 'laboran') {
            header("Location: dashboardAdmin.php");
        } elseif ($role == 'mahasiswa') {
            header("Location: dashboard.php");
        } elseif ($role == 'dosen') {
            header("Location: dashboard.php");
        } else {
            // Role tidak dikenali
            $_SESSION['error'] = "Role tidak dikenali.";
            header("Location: login.php");
        }
    } else {
        // Password salah
        $_SESSION['error'] = "Kata sandi salah.";
        header("Location: login.php");
    }
} else {
    // Username atau role tidak ditemukan
    $_SESSION['error'] = "Nama pengguna atau peran tidak ditemukan.";
    header("Location: login.php");
}

$stmt->close();
$conn->close();
?>
