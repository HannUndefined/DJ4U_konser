<?php 
require_once "service/koneksi.php";

$hasilQuery = getData("SELECT * FROM konser");

?>

<!DOCTYPE html>
<html>
<head>
  <title>DJ4u</title>
</head>

<body>
  <form action="data_diri.php" method="POST">
    <h1>Pilih Tiket</h1>
    <select name="hargaID" id="konser_id">
        <?php foreach($hasilQuery as $hasil) : ?>
        <option value='<?= $hasil["id"] ?>-<?= $hasil["harga"] ?>'>
            (kelas: (<?= $hasil['kelas'] ?>) - (<?= $hasil['nama'] ?>) - (<?= $hasil['tanggal'] ?>) - (<?= $hasil['lokasi_konser'] ?>) - 
            (harga: (<?= $hasil['harga'] ?>) - (jumlah tiket: (<?= $hasil['jumlah_tiket'] ?>)
        </option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="hidden" name="status" value="pending">
    <input type="hidden" name="total_harga" id="total_harga" value="">
    <button type="submit">Pilih</button>
  </form>
</body>

</html>
