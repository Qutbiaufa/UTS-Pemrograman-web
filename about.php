<?php
include 'db.php'; // Menyambungkan ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
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
            background: url('star.gif'); /* Animasi bintang yang sama */
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

        #about {
            text-align: center;
            padding: 100px 20px;
            animation: fadeIn 2s;
        }

        #about h1 {
            font-size: 3em;
            color: #ffdd57;
            margin-bottom: 10px;
        }

        #photo-with-description {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px 0;
            animation: slideIn 1.5s;
        }

        #photo-with-description .photo img {
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        #photo-with-description h2 {
            font-size: 24px;
            color: #ffdd57;
            margin-top: 15px;
            animation: fadeIn 2s;
        }

        #photo-with-description p {
            font-size: 16px;
            line-height: 1.6;
            color: #f0f0f0;
            max-width: 600px;
            text-align: center;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            0% { opacity: 0; transform: translateX(-100px); }
            100% { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Damzz Web</span>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php" class="active">About Us</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="photo.php">Photo</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <section id="about">
        <h1>About Us</h1>
        <p>Ini adalah halaman tentang saya.</p>
    </section>

    <section id="photo-with-description">
        <div class="photo">
            <img src="bio3.jpg" alt="Deskripsi Foto">
        </div>
        <h2>Tentang Saya</h2>
        <p>Nama saya Qutbiaufa Damar Is'ad, saya mahasiswa Universitas Pembangunan Jaya dan program studi yang saya ambil adalah Teknik Informatika. Saya lahir pada 01 November 2003 pada hari Sabtu. Saya membuat website ini dikarenakan tugas Pemrograman Web dan juga untuk mendapatkan nilai tentunya.</p>
    </section>
</body>
</html>
