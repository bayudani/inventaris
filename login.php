<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Web Inventaris Peminjaman Ruangan TI</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/Gedung Rektorat dan TI.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .signin-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signin-form {
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .signin-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #0044cc;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 20px;
            border-color: #ddd;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #0044cc;
            box-shadow: 0 0 10px rgba(0, 68, 204, 0.3);
        }

        .btn-primary {
            background-color: #0044cc;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #002a80;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link a {
            color: #0044cc;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="signin-container">
        <form class="signin-form" action="prosesLoginUser.php" method="POST">
            <h2>Sign In</h2>
            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna"
                    required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi"
                    required>
            </div>
            <div class="form-group">
                <label for="role">Pilih Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="laboran">Laboran</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                </select>
            </div>
            <div class="signup-link">
                Belum punya akun? <a href="registrasi.php">Daftar di sini</a>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 TI Politeknik Negeri Bengkalis. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>