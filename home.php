<?php
include 'db.php'; // Menyambungkan ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Latar Belakang Luar Angkasa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* CSS untuk galeri foto tunggal yang lebih besar dan deskripsi di samping */
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            color: white;
            background: linear-gradient(to bottom, #000428, #004e92);
            overflow-x: hidden;
        }

        /* Background animasi bintang */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('star.gif'); /* Tambahkan file .gif animasi bintang */
            opacity: 0.2;
            z-index: -1;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffdd57;
        }

        .brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5em;
            color: #ffdd57;
        }

        #home {
            text-align: center;
            padding: 100px 20px;
            animation: fadeIn 2s;
        }

        #home h1 {
            font-size: 3em;
            color: #ffdd57;
            margin-bottom: 10px;
        }

        #gallery {
            padding: 40px 20px;
        }

        /* Efek hover untuk gambar */
        .photo-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            animation: slideIn 1.5s;
        }

        .photo {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            transition: transform 0.3s ease;
        }

        .photo:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 221, 87, 0.4);
        }

        .photo img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
        }

        .photo-description {
            color: white;
            width: 50%;
        }

        .photo-description h2 {
            font-size: 24px;
            margin-bottom: 10px;
            animation: fadeIn 2s;
        }

        .photo-description p {
            font-size: 16px;
            line-height: 1.5;
        }

        /* Keyframes animasi */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    
    <nav>
        <span class="brand">Damzz Web</span>
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="photo.php">Photo</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1>Selamat Datang</h1>
        <p>Website ini bertujuan untuk ujian tengah semester</p>
    </section>

    <section id="gallery">
        <h2>Perkenalan</h2>
        <div class="photo-grid">
            <!-- Foto tunggal dengan deskripsi perkenalan di samping -->
            <div class="photo">
                <img src="damzz.jpg" alt="Galaksi Andromeda">
                <div class="photo-description">
                    <h2>Halo!</h2>
                    <p>Nama saya Qutbiaufa Damar Is'ad, saya mahasiswa Universitas Pembangunan Jaya, dan saya sedang mengembangkan web untuk ujian tengah semester saya.</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
