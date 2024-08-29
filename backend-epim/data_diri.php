<?php 
if(!isset($_POST)) {
    header("Location: konser.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>

    <form action="service/proses_konser.php" method="POST" >
    <input type="hidden" name="konser_id" value="<?= explode("-", $_POST["hargaID"])[0] ?>">
    <input type="hidden" name="harga" value="<?= explode("-", $_POST["hargaID"])[1] ?>">
    <label for="nama">nama:</label>
    <input type="text" id="nama" name="nama" required>
    <label for="nomor_tlp">nomor_tlp:</label>
    <input type="number" id="nomor_tlp" name="nomor_tlp" required>
    <label for="email">email:</label>
    <input type="email" id="email" name="email" required>
    <label for="alamat">alamat:</label>
    <input type="text" id="alamat" name="alamat" required>
    <br>
    <select name="metode_pembayaran" id="metode_pembayaran">
        <option value="dana">Dana</option>
        <option value="paypal">paypal</option>
        <option value="indomaret">Indomaret</option>
        <option value="alfamart">Alfamart</option>
    </select>
    <br>
    <button type="submit">MASUK</button>
 
    </form>
</body>
</html>