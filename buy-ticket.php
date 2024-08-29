<?php 
require_once "backend-epim/service/koneksi.php";
include("backend-epim/index.php");

$hasilQuery = getData("SELECT * FROM konser WHERE id=1");
$hasilQuery2 = getData("SELECT * FROM konser WHERE id=2");
$hasilQuery3 = getData("SELECT * FROM konser WHERE id=3");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Buy Ticket</title>
  </head>
  <body>
    <a href="index.php" class="kembali"><button class="btn-biru">KEMBALI</button></a>
    <section class="seat">
      <div class="filter"></div>
      <img src="assets/image/seatmap.png" alt="" />
    </section> 
    <section class="ticket-info">
      <div class="blur"></div>
      <div class="title">
        <img src="assets/icons/OrangeRicky.png" alt="">
        JAKARTA
        <img src="assets/icons/OrangeRicky.png" alt="" style="transform: rotateY(180deg) translateY(-6px);">
      </div>
      <div class="info">
        <div class="tanggal">
          <img src="assets/icons/kalender.svg" alt="" />
          14 OKTOBER 2024, 20.00 WIB
        </div>
        <div class="lokasi">
          <img src="assets/icons/lok.svg" alt="" />
          Jakarta International Stadium, Papanggo, Tanjung Priok Jakarta
        </div>
      </div>
      <div class="countdownTimer" data-target="2024-10-14T20:00:00">
        <div class="kotak hari">
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
    </section>
    <section class="ticket-list">
      <?php foreach($hasilQuery as $hasil) : ?>
      <div class="ticketClass">
        <div class="classLabel"><?= $hasil['kelas'] ?></div>
        <div class="ticket-stock">
          <div>STOCK</div>
          <div><?= $hasil['jumlah_tiket'] ?></div>
        </div>
        <div class="ticket-price">
          <div>PRICE</div>
          <div><?= $hasil['harga'] ?></div>
        </div>
        <a href=""><button class="btn-biru" id="buyTicket" data-ticket-class="VIP">BUY TICKET</button></a>
      </div>
      <?php endforeach ?>
      <div class="ticketClass">
        <?php foreach($hasilQuery2 as $hasil) : ?>
        <div class="classLabel">Class <?= $hasil['kelas'] ?></div>
        <div class="ticket-stock">
          <div>STOCK</div>
          <div><?= $hasil['jumlah_tiket'] ?></div>
        </div>
        <div class="ticket-price">
          <div>PRICE</div>
          <div><?= $hasil['harga'] ?></div>
        </div>
        <a href=""><button class="btn-biru" id="buyTicket" data-ticket-class="ClassA">BUY TICKET</button></a>
      </div>
      <?php endforeach ?>
       <?php foreach($hasilQuery3 as $hasil) : ?>
      <div class="ticketClass">
        <div class="classLabel">Class <?= $hasil['kelas'] ?></div>
        <div class="ticket-stock">
          <div>STOCK</div>
          <div><?= $hasil['jumlah_tiket'] ?> </div>
        </div>
        <div class="ticket-price">
       <div>PRICE</div>
          <div><?= $hasil['harga'] ?></div>
        </div>
        <a><button class="btn-biru" id="buyTicket" data-ticket-class="ClassB">BUY TICKET</button></a>
      </div>
       <?php endforeach ?>
    </section>

  <div class="form-wrapper" id="formDataDiriWrapper">
    
  </div>
    
    <footer class="footer">
      <div class="f-ftr"></div>
      <div class="t-footer">
        <img src="/assets/image/arrow-l.png" alt="" />
        <h1 style="margin: 10px;">DJ4U</h1>
        <img src="/assets/image/arrow-r.png" alt="" />
      </div>
      <div class="f-icons">
        <a href=""><img src="/assets/icons/instagram.svg" alt=""></a>
        <a href=""><img src="/assets/icons/spotify.svg" alt=""></a>
        <a href=""><img src="/assets/icons/youtube.svg" alt=""></a>
        <a href=""><img src="/assets/icons/twitter-x.svg" alt=""></a>
      </div>
      <div class="f-copyright">Copyright © 2024 DJ4U Indonesia </div>
    </footer>

    <script src="<?= $url ?>script.js"></script>
  </body>
</html>