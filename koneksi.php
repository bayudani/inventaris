<?php
$koneksi = mysqli_connect("localhost", "root", "", "inti");

//check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal :" . mysqli_connect_error();
} else {
    echo "";
}

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
        echo "Anda harus login untuk mengakses halaman admin";
    }
}