<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Ruangan - Gedung TI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to right, rgba(0, 68, 204, 0.1) 50%, rgba(0, 68, 204, 0.1) 50%);
            background-size: 100% 1px;
            background-position: 0 40px;
        }

        .header {
            background-color: #0044cc;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        .navbar {
            background-color: #0044cc;
            overflow: hidden;
            display: flex;
            justify-content: flex-start;
            padding: 14px 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin-right: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .navbar a:hover {
            background-color: #002a80;
            border-radius: 4px;
        }

        .content {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        .room-profile {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .room-profile:hover {
            transform: translateY(-5px);
        }

        .room-profile h2 {
            color: #0044cc;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .room-profile p {
            color: #666;
            line-height: 1.6;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            clear: both;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Tentang Ruangan - Gedung TI</h1>
    </div>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="Tentang.php">Tentang</a>
    </nav>

    <div class="content">
        <?php
        $rooms = [
            [
                "name" => "Sistem Informasi dan Basis Data",
                "lab_assistant" => "Adelia Fitriyani A.Md",
                "description" => "Lab. Sistem Informasi dan Basis data digunakan untuk Praktikum : Basis Data, Perancangan Basis Data, Administrasi Basis Data, Teori dan Praktikum Konsep Pemogram 1,2, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat."
            ],
            [
                "name" => "Pemrograman",
                "lab_assistant" => "Wiwin Saputra, A.Md",
                "description" => "Lab. Pemrograman, digunakan untuk praktikum : Pemograman Berorientasi Objek (PBO), Struktur Data, Pekerjaan tugas mata kuliah, Pelatihan Java Fundamental (Oracle Academy) tugas akhir (TA), dan pengabdian masyarakat."
            ],
            [
                "name" => "Multimedia",
                "lab_assistant" => "Supendi, A.Md",
                "description" => "Lab. Pembelajaran Multimedia, dapat digunakan untuk Praktikum : Animasi Multimedia, Desain Grafis,Video Editing, MYOB, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat."
            ],
            [
                "name" => "Jaringan Komputer dan Informasi",
                "lab_assistant" => "Dedi hermawan A.Md",
                "description" => "Lab. Jaringan Komputer dan Informasi, digunakan untuk praktikum : Sistem Operasi, Konsep Jaringan, Administrasi Sistem, Administrasi Jaringan, Sistem informasi manajemen, Pelatihan Cisco Local Academy, Pekerjaan tugas mata kuliah, tugas akhir (TA), komputasi berbasis jaringan, dan Pengabdian Pada Masyarakat."
            ],
            [
                "name" => "Artificial Intelligence",
                "lab_assistant" => "Isna Yulia, A.Md",
                "description" => "Lab. Artificial Intelligence, digunakan untuk Praktikum: Pemrograman, Desain Web, Web Programming, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan Pengabdian Pada Masyarakat."
            ],
            [
                "name" => "Software Development",
                "lab_assistant" => "Nurhimaddin, A.Md",
                "description" => "Lab. Software Development, digunakan untuk Praktikum: Pemrograman, Desain Web, Web Programming, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan Pengabdian Pada Masyarakat."
            ],
            [
                "name" => "IoT",
                "lab_assistant" => "Khairus Suhada, A.Md",
                "description" => "Lab. Komputer Dasar, digunakan untuk Praktikum : Pengantar Teknologi Informasi, Perawatan dan Perbaikan Komputer, tugas akhir (TA), dan pengabdian masyarakat."
            ],
            [
                "name" => "Kemanan Informasi",
                "lab_assistant" => "Isna Yulia, A.Md",
                "description" => "Lab. Komputasi, digunakan untuk praktikum : Pemrograman I, Pemrograman Web II, Teknologi Web XML dan Web Service, Pekerjaan tugas mata kuliah, tugas akhir (TA), dan pengabdian masyarakat."
            ]
        
        ];

        foreach ($rooms as $room) {
            echo "<div class='room-profile'>";
            echo "<h2>{$room['name']}</h2>";
            echo "<p><strong>Nama Laboran:</strong> {$room['lab_assistant']}</p>";
            echo "<p><strong>Penjelasan:</strong> {$room['description']}</p>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="footer">
        <p>&copy; 2024 TI Politeknik Negeri Bengkalis. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
