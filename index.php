<!DOCTYPE html>
<html>
<head>
    <title>Rental Kamera</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h1>Selamat datang di Rental Kamera Mika</h1>
    </section>

    <section id="types">
        <h2>Jenis Kamera Tersedia:</h2>
        <ul>
            <li>
                <h3>Nikon D750</h3>
                <p>Harga: Rp 100.000/hari</p>
                <p>Deskripsi: Kamera dengan fitur canggih dan resolusi tinggi.</p>
            </li>
            <li>
                <h3>Sony Alpha A6400</h3>
                <p>Harga: Rp 150.000/hari</p>
                <p>Deskripsi: Kamera dengan lensa zoom yang kuat untuk fotografi telefoto.</p>
            </li>
            <li>
                <h3>Fuji Film XT200</h3>
                <p>Harga: Rp 200.000/hari</p>
                <p>Deskripsi: Kamera dengan kemampuan merekam video 4K berkualitas tinggi.</p>
            </li>
        </ul>
    </section>

    <section id="order">
        <h2>Silakan mengisi form berikut untuk memesan:</h2>
        <form action="order.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="kamera">Kamera:</label>
            <select name="kamera" id="kamera" required>
                <option value="">Pilih Kamera</option>
                <option value="Nikon D750">Nikon D750</option>
                <option value="Sony Alpha A6400">Sony Alpha A6400</option>
                <option value="Fuji Film XT200">Fuji Film XT200</option>
            </select>

            <label for="durasi">Durasi Peminjaman (hari):</label>
            <input type="number" name="durasi" id="durasi" min="1" required>

            <label for="jaminan">Jaminan:</label>
            <select name="jaminan" id="jaminan" required>
                <option value="">Pilih Jaminan</option>
                <option value="Kartu Pelajar">Kartu Pelajar</option>
                <option value="KTP">KTP</option>
            </select>

            <label for="nohp">Nomor HP:</label>
            <input type="text" name="nohp" id="nohp" required>

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" required></textarea>

            <input type="submit" value="Pesan">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Rental Kamera Mika. All rights reserved.</p>
    </footer>
</body>
</html>
