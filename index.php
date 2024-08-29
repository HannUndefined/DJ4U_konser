<?php
  include("backend-epim/index.php")
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DJ4U Official Website</title>
  </head>
  <body>
    <nav class="navbar" id="navbar">
      <div class="wrappernav">
        <a href="#home">Home</a>
        <div class="decor"></div>
      </div>
      <div class="wrappernav">
        <a href="#about">About</a>
        <div class="decor"></div>
      </div>
      <div class="wrappernav">
        <a href="#gallery">Galery</a>
        <div class="decor"></div>
      </div>
      <div class="wrappernav">
        <a href="#schedule">Schedule</a>
        <div class="decor"></div>
      </div>
      <div class="wrappernav">
        <a href="#ticket">Ticket</a>
        <div class="decor"></div>
      </div>
    </nav>

    <div class="home" id="home">
      <div class="filter_bg"></div>
      <img src="<?= $url ?>assets/image/dj4u.png" alt="" class="dj4u" />
    </div>

    <section class="latestCountdown">
      <div class="filter"></div>
      <div class="blur"></div>
      <div class="countdownLatest">
        <p class="countdownTitle">JAKARTA - 14 OKTOBER 2024 - JIS</p>
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
        <center>
          <div class="garis"></div>
          <a href="#ticket"><button class="btn">BELI SEKARANG</button></a>
        </center>
      </div>
    </section>

    <section class="about" id="about">
      <div class="penjelasan">
        <div class="jdul-about">
          <h1>TENTANG <span style="color: #075fd2">DJ4U</span></h1>
        </div>
        <div class="about-text">
          DJ4U memulai karirnya di dunia musik dengan bermain di klub-klub lokal
          sebelum akhirnya dikenal luas melalui platform musik online. <br />
          <br />
          Dan DJ4U menjadi terkenal dan sedang mengadakan tour keliling
          Indonesia dan Asia.
        </div>
      </div>
      <div class="gambar_about">
        <img src="<?= $url ?>assets/image/img-about.png" alt="img-about" />
      </div>
    </section>

    <section class="gallery" id="gallery">
      <div
        class="t-gallery"
        style="color: white; position: relative; z-index: 2"
      >
        gallery <span style="color: #075fd2">dj4u</span>
      </div>
      <div class="row-img">
        <div class="carousel-container">
          <div class="slides" id="slides">
            <div class="slide">
              <img src="<?= $url ?>assets/image/carousel.png" alt="gambar1" />
            </div>
            <div class="slide">
              <img src="<?= $url ?>assets/image/carousel2.png" alt="gambar2" />
            </div>
            <div class="slide">
              <img src="<?= $url ?>assets/image/carousel3.png" alt="gambar3" />
            </div>
          </div>
          <button class="button-carousel left" onclick="prevSlide()">
            &#10094;
          </button>
          <button class="button-carousel right" onclick="nextSlide()">
            &#10095;
          </button>
        </div>
      </div>
      <div class="filter"></div>
    </section>

    <section class="schedule" id="schedule">
      <div class="t-schedule" style="color: white">
        TOUR SCHEDULE <span style="color: #075fd2">DJ4U</span>
      </div>
      <div class="schbody">
        <div class="gambar-sch">
          <img src="<?= $url ?>assets/image/Intersect.png" alt="gambar kiri" />
        </div>
        <div class="garis-sch"></div>
        <div class="info-sch">
          <div class="wrp 1">
            <div class="tgl">
              <p style="color: #075fd2">14<br />OKT</p>
            </div>
            <div class="gris"></div>
            <div class="tmpt">JAKARTA</div>
          </div>
          <div class="wrp 2">
            <div class="tgl">
              <p style="color: #075fd2">25<br />OKT</p>
              <p></p>
            </div>

            <div class="gris"></div>
            <div class="tmpt">BANDUNG</div>
          </div>
          <div class="wrp 3">
            <div class="tgl">
              <p style="color: #075fd2">10<br />OKT</p>
            </div>
            <div class="gris"></div>
            <div class="tmpt">MALANG</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ticket" id="ticket">
      <div class="fltr-tkt"></div>
      <div class="t-tkt">
        <p>TICKET <span style="color: #075fd2">DJ4U</span></p>
      </div>
      <div class="tkt-cntainer">
        <div class="tkt-wrapper">
          <div class="tkt-info">
            <div class="t-info" style="font-size: 70px">JAKARTA</div>
            <div class="t-tmpat"><p>JAKARTA INTERNATIONAL STADIUM</p></div>
            <div class="t-wktu"><p>14 OKT 2024 | 18.30 WIB</p></div>
          </div>
          <div class="tkt-gris"></div>
          <a href="buy-ticket.php"
            ><button class="btn-biru">BUY TICKET</button></a
          >
        </div>
        <div class="tkt-wrapper">
          <div class="tkt-info">
            <div class="t-info" style="font-size: 70px">BANDUNG</div>
            <div class="t-tmpat"><p>BANDUNG LAUTAN API STADIUM</p></div>
            <div class="t-wktu"><p>14 OKT 2024 | 18.30 WIB</p></div>
          </div>
          <div class="tkt-gris"></div>
          <a href=""><button class="btn-biru">BUY TICKET</button></a>
        </div>
        <div class="tkt-wrapper">
          <div class="tkt-info">
            <div class="t-info" style="font-size: 70px">MALANG</div>
            <div class="t-tmpat"><p>KANJURUHAN STADIUM</p></div>
            <div class="t-wktu"><p>14 OKT 2024 | 18.30 WIB</p></div>
          </div>
          <div class="tkt-gris"></div>
          <a href=""><button class="btn-biru">BUY TICKET</button></a>
        </div>
        <div class="tkt-wrapper">
          <div class="tkt-info">
            <div class="t-info" style="font-size: 70px">SOLO</div>
            <div class="t-tmpat solo"><p>MANAHAN SOLO STADIUM</p></div>
            <!-- <div class="t-wktu"><p>14 OKT 2024 | 18.30 WIB</p></div> -->
          </div>
          <div class="tkt-gris"></div>
          <a href=""><button class="btn-solo btn-biru">COMING SOON</button></a>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="f-ftr"></div>
      <div class="t-footer">
        <img src="<?= $url ?>assets/image/arrow-l.png" alt="" />
        <h1 style="margin: 10px">DJ4U</h1>
        <img src="<?= $url ?>assets/image/arrow-r.png" alt="" />
      </div>
      <div class="f-icons">
        <a href=""><img src="<?= $url ?>assets/icons/instagram.svg" alt="" /></a>
        <a href=""><img src="<?= $url ?>assets/icons/spotify.svg" alt="" /></a>
        <a href=""><img src="<?= $url ?>assets/icons/youtube.svg" alt="" /></a>
        <a href=""><img src="<?= $url ?>assets/icons/twitter-x.svg" alt="" /></a>
      </div>
      <div class="f-copyright">Copyright © 2024 DJ4U Indonesia</div>
    </footer>

    <script src="<?= $url ?>script.js"></script>
  </body>
</html>
