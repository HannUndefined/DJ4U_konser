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
    <title>Pembayaran</title>
</head>
<body>
    <h1>Harap Selesaikan Pembayaran</h1>
    <form action="metode_pembayaran.php?order_id=<?php echo $orderId; ?>" method="POST">
        <button type="submit" name="submit">Lanjutkan Pembayaran</button>
    </form>
</body>
</html>
