<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kamera = $_POST['kamera'];
    $durasi = $_POST['durasi'];
    $jaminan = $_POST['jaminan'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $order = "Nama: $nama, Kamera: $kamera, Durasi Peminjaman: $durasi hari, Jaminan: $jaminan, No. HP: $nohp, Alamat: $alamat\n";

    $file = fopen("orders.txt", "a");
    fwrite($file, $order);
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rental Kamera - Order Berhasil</title>
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

    <section id="thank-you">
        <h2>Terima kasih atas pesanan Anda, <?php echo $nama; ?>!</h2>
        <p>Pesanan Anda telah berhasil diterima.</p>
        <p>Berikut adalah detail pesanan Anda:</p>

        <div class="order-details">
            <h3>Nama Penyewa:</h3>
            <p><?php echo $_POST['nama']; ?></p>

            <h3>Kamera yang Dipilih:</h3>
            <p><?php echo $_POST['kamera']; ?></p>

            <h3>Durasi Peminjaman:</h3>
            <p><?php echo $durasi; ?> hari</p>

            <?php
            // Hitung total harga
            $harga_per_hari = 0;
            if ($kamera == "Nikon D750") {
                $harga_per_hari = 100000;
            } elseif ($kamera == "Sony Alpha A6400") {
                $harga_per_hari = 150000;
            } elseif ($kamera == "Fuji Film XT200") {
                $harga_per_hari = 200000;
            }
            $total_harga = $harga_per_hari * $durasi;
            ?>
            <h3>Total Harga:</h3>
            <p>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></p>

            <h3>Jaminan:</h3>
            <p><?php echo $_POST['jaminan']; ?></p>

            <h3>Nomor HP:</h3>
            <p><?php echo $_POST['nohp']; ?></p>

            <h3>Alamat:</h3>
            <p><?php echo $_POST['alamat']; ?></p>
        </div>

        <h3>Pembayaran:</h3>
        <p>Silakan lakukan pembayaran melalui:</p>
        <ul>
            <li>Lewat ATM langsung transfer ke rekening 0645-1135-8372-0383 a/n Rental Kamera Mika</li>
            <li>Aplikasi pembayaran dompet digital seperti (DANA, OVO, GoPay, dll) dengan memasukan nomor ini 0812-2665-8058 .</li>
        </ul>
        <p>Setelah pembayaran berhasil, Anda dapat mengambil kamera di toko kami dengan menunjukan butki pembayaran nya kepada kasir.</p>

        <p><a href="index.php">Kembali ke halaman utama</a></p>
    </section>

    <footer>
        <p>&copy; 2023 Rental Kamera Mika. All rights reserved.</p>
    </footer>
</body>
</html>


