<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Foto Saya</title>
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
            position: relative;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffdd57;
        }

        /* Style untuk garis di bawah link aktif */
        nav a.photo-active::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -5px; /* Jarak garis dari teks */
            height: 3px;
            background-color: white; /* Warna garis diubah menjadi putih */
            border-radius: 2px;
        }

        .brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5em;
            color: #ffdd57;
        }

        #new-section {
            text-align: center;
            padding: 50px 20px;
            animation: fadeIn 2s;
        }

        #new-section h1 {
            font-size: 2.5em;
            color: #ffdd57;
            margin-bottom: 10px;
        }

        #gallery {
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .photo-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .photo-item {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            color: white;
            width: calc(33.33% - 20px);
            max-width: 300px;
            transition: transform 0.3s ease;
            animation: fadeIn 1.5s;
        }

        .photo-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 221, 87, 0.4);
        }

        .photo-item img {
            width: 100%;
            border-radius: 10px;
        }

        /* Animasi fadeIn */
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
            <li><a href="project.php">Project</a></li>
            <li><a href="photo.php" class="photo-active">Photo</a></li> <!-- Class 'photo-active' untuk link Photo -->
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <section id="new-section">
        <h1>Semua Foto Saya</h1>
        <p>Dihalaman kali ini hanya ada beberapa foto kenarsisan dari saya.</p>
    </section>

    <section id="gallery">
        <div class="photo-gallery">
            <!-- Foto 1 -->
            <div class="photo-item">
                <img src="damz1.jpg" alt="Foto 1">
                <p>Ini saat saya sedang ngegym untuk membentuk tubuh yang ideal.</p>
            </div>
            <!-- Foto 2 -->
            <div class="photo-item">
                <img src="damz2.jpg" alt="Foto 2">
                <p>foto kedua saya dapatkan ketika sedang seminar untuk mendapatkan nilai tambahan.</p>
            </div>
            <!-- Foto 3 -->
            <div class="photo-item">
                <img src="damz3.jpg" alt="Foto 3">
                <p>foto ini saat saya sedang kelas Sistem Tertanam.</p>
            </div>
            <!-- Foto 4 -->
            <div class="photo-item">
                <img src="damz4.jpg" alt="Foto 4">
                <p>Foto ini sedang di lift, narsis banget anaknya.</p>
            </div>
            <!-- Foto 5 -->
            <div class="photo-item">
                <img src="damz5.jpg" alt="Foto 5">
                <p>foto kelima dengan teman saya Ramzi Akbarsyah.</p>
            </div>
            <!-- Foto 6 -->
            <div class="photo-item">
                <img src="damz6.jpg" alt="Foto 6">
                <p>Foto keenam saat saya sedang healing ke Bandung saat liburan UAS.</p>
            </div>
        </div>
    </section>
</body>
</html>
