<?php
require_once __DIR__ . '/service/koneksi.php';

// Ambil order_id dari URL
$orderId = $_GET['order_id'] ?? null;

if (!$orderId) {
    die("Order ID tidak ditemukan.");
}

if(isset($_POST["submit"])) {
    $orderId = $_GET["order_id"];

    mysqli_query($conn, "UPDATE payment SET status = 'success' WHERE code_pemesanan = '$orderId'");

    if(mysqli_affected_rows($conn) > 0 ) {
        echo "<script>alert('Pembayaran Berhasil')";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BELUM BAYAR</title>
</head>
<body>
    <section class="payment">
        <div class="filter"></div>
        <h1>BELUM BAYAR</h1>
        <p>Selesaikan Pembayarab Terlebih Dahulu Sebelum Waktu Habis, Tunjukkan Barcode ke Kasir</p>
        <div class="countdownTimer" data-target="2024-10-14T20:00:00">
            <div class="kotak hari" style="display: none;">
              <div>0</div>
              <p>HARI</p>
            </div>
            <div class="kotak jam">
              <div>0</div>
              <p>JAM</p>
            </div>
            <div class="kotak menit">
              <div>0</div>
              <p>MENIT</p>
            </div>
            <div class="kotak detik">
              <div>0</div>
              <p>DETIK</p>
            </div>
        </div>
        <div class="payment-info">
            <div class="left">
                <span>Tanggal Pembelian</span>
                <p>01/07/2024</p>
                <span>Nomor Pesanan</span>
                <p>VIP-2836273846-12062400</p>
                <span>Metode Pembayaran</span>
                <p>Gopay</p>
                <span>Status Pembayaran</span>
                <p>Belum Bayar</p>
            </div>
            <div class="mid"></div>
            <div class="right">
                <span>Ticket</span>
                <p>DJ4U JIS 2024</p>
                <span>Kelas</span>
                <p>VIP</p>
                <span>Harga</span>
                <p>Rp. 1.000.000</p>
                <span>Tanggal Konser</span>
                <p>12 Juni 2024</p>
            </div>
        </div>
        <div class="button-payment">
          <form action="metode_pembayaran.php?order_id=<?php echo $orderId; ?>" method="POST">
            <button><a href="success.html">Lanjutkan Pembayaran</a></button>
            <button><a href="buy-ticket.html">Kembali</a></button>
        </div>
    </section>

<script src="script.js"></script>
</body>
</html>
        <