<?php
// Menyertakan koneksi ke database
include 'db.php';

// Memeriksa apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];

    // Menyiapkan dan menjalankan query untuk menyimpan data
    $sql = "INSERT INTO contact_messages (nama, email, judul, pesan) VALUES ('$nama', '$email', '$judul', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
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
        nav a.contact-active::after {
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

        #contact {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            color: #333;
        }

        #contact h1 {
            font-size: 2.5em;
            color: #004e92;
            margin-bottom: 5px;
            text-align: center;
        }

        #contact p {
            font-size: 1.2em;
            color: #666;
            margin-top: 10px;
            text-align: center;
        }

        .contact-form {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact-form button {
            width: 100%;
            padding: 12px;
            background-color: #004e92;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #003366;
        }

        .contact-info {
            margin-top: 20px;
            color: #333;
            font-size: 1em;
            text-align: center;
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
            <li><a href="photo.php">Photo</a></li>
            <li><a href="contact.php" class="contact-active">Contact Us</a></li> <!-- Class 'contact-active' untuk link Contact Us -->
        </ul>
    </nav>

    <section id="contact">
        <div class="contact-form">
            <h1>Hubungi saya</h1>
            <p>Kalo gabut call azza</p>
            <form action="contact.php" method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="no_hp" placeholder="No HP" required>
                <textarea name="pesan" placeholder="Pesan-Pesan" rows="4" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="contact-info">
            <p>Email: qutbiaufa.dmr@gmail.com</p>
            <p>No HP: 0821-1365-6359</p>
        </div>
    </section>
</body>
</html>
