<?php
include 'db.php'; // Menyambungkan ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Kami</title>
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
            background: url('star.gif'); /* Animasi bintang */
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

        #projects {
            padding: 50px 20px;
            text-align: center;
            animation: fadeIn 2s;
        }

        #projects h1 {
            font-size: 2.5em;
            color: #ffdd57;
            margin-bottom: 10px;
        }

        .project-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .project-image {
            max-width: 500px; /* Ukuran foto diperbesar */
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .project-description {
            max-width: 700px; /* Lebar deskripsi diperbesar */
            color: white;
            font-size: 1.5em; /* Ukuran font diperbesar */
            transition: transform 0.3s ease;
        }

        /* Hover effect untuk melayang */
        .project-container:hover .project-image,
        .project-container:hover .project-description {
            transform: translateY(-10px);
        }

        /* Animasi untuk fade-in */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Damzz Web</span>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="project.php" class="active">Project</a></li>
            <li><a href="photo.php">Photo</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <section id="projects">
        <h1>Proyek yang pernah saya buat</h1>
        <div class="project-container">
            <!-- Foto Proyek -->
            <img src="projek.jpg" alt="Foto Proyek" class="project-image">
            
            <!-- Deskripsi Proyek -->
            <div class="project-description">
                <h2>Schedule Master</h2>
                <p>Project ini bertujuan untuk mengembangkan aplikasi Schedule Master yang dapat digunakan sebagai patokan waktu yang telah dijadwalkan sehingga kita tidak lupa dengan kegiatan yang akan kita lakukan.</p>
            </div>
        </div>
    </section>
</body>
</html>
