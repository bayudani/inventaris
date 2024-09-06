<?php
session_start();
require 'koneksi.php';

// Redirect to login page if not logged in
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit();
}

// Fetch user data from session
$username = $_SESSION['username'];

// Database connection parameters
$host = 'localhost';
$dbname = 'inti';
$username_db = 'root';
$password_db = '';

try {
    // Connect to database using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch user data by username
    $stmt = $conn->prepare("SELECT * FROM user WHERE nama = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Handle file upload if form submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['fileFoto']) && $_FILES['fileFoto']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['fileFoto']['name']);
            $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES['fileFoto']['tmp_name']);
            if ($check !== false) {
                // Allow certain file formats
                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
                if (in_array($imageFileType, $allowedTypes)) {
                    // Move uploaded file to target directory
                    if (move_uploaded_file($_FILES['fileFoto']['tmp_name'], $uploadFile)) {
                        // Update database with new profile image path
                        $profileImagePath = $uploadFile;
                        $updateStmt = $conn->prepare("UPDATE user SET profile_image = :profile_image WHERE nama = :username");
                        $updateStmt->bindParam(':profile_image', $profileImagePath);
                        $updateStmt->bindParam(':username', $username);
                        $updateStmt->execute();

                        // Redirect to profile page after successful update
                        header("Location: profile.php");
                        exit();
                    } else {
                        echo "Gagal mengunggah file.";
                    }
                } else {
                    echo "Jenis file tidak didukung. Silakan unggah file dengan format JPG, JPEG, PNG, atau GIF.";
                }
            } else {
                echo "File yang Anda unggah bukan gambar yang valid.";
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    }

    // Close database connection
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding-top: 20px;
        }

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .profile-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #0044cc;
        }

        .profile-img {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }

        .profile-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .profile-circle:hover .overlay {
            height: 100%;
        }

        .add-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            cursor: pointer;
        }

        .add-icon svg {
            width: 30px;
            height: 30px;
        }

        .add-icon:hover {
            text-decoration: none;
        }

        .profile-info {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .profile-info label {
            font-weight: bold;
            color: #555;
        }

        .profile-info p {
            margin: 0;
            color: #333;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0044cc;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #003399;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <h2>Profil Pengguna</h2>

        <div class="profile-img">
            <div class="profile-circle">
                <?php if (!empty($user['profile_image'])): ?>
                    <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" alt="Foto Profil">
                <?php else: ?>
                    <img src="default_profile_image.jpg" alt="Default Foto Profil">
                <?php endif; ?>

                <div class="overlay">
                    <label for="fileFoto" class="add-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1a.75.75 0 0 1 .75.75V7h5.25a.75.75 0 0 1 0 1.5H8V15a.75.75 0 0 1-1.5 0V8H1.75a.75.75 0 0 1 0-1.5H6V1.75A.75.75 0 0 1 7.5 1h.75z" />
                        </svg>
                    </label>
                </div>
            </div>
        </div>

        <div class="profile-info">
            <form action="profile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileFoto">Pilih Foto Profil:</label>
                    <input type="file" class="form-control-file" id="fileFoto" name="fileFoto" style="display: none;">
                </div>
                <button type="submit" class="btn btn-primary" id="submitBtn">Unggah Foto</button>
            </form>
        </div>

        <div class="profile-info">
            <label>Nama Pengguna:</label>
            <p><?php echo htmlspecialchars($user['nama']); ?></p>
        </div>
        <div class="profile-info">
            <label>Email:</label>
            <p><?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <div class="profile-info">
            <label>NIM/NIP:</label>
            <p><?php echo htmlspecialchars($user['nim_nip']); ?></p>
        </div>
        <div class="profile-info">
            <label>Role:</label>
            <p><?php echo htmlspecialchars($user['role']); ?></p>
        </div>

        <a href="dashboard.php" class="btn-back">Kembali</a>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelector('.add-icon').addEventListener('click', function () {
            document.getElementById('fileFoto').click();
        });
    </script>
</body>

</html>
