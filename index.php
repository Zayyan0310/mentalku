<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mentalku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caladea:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Swiper CSS -->
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="" class="navbar-logo">Mental<span>ku</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#artikel">Artikel</a>
        <a href="#forum">Forum</a>
        <a href="#pilihdokter">Pilih Dokter</a>
        <a href="#psikotest">Psikotest</a>
        <a href="#latihan">Latihan</a>
      </div>

      <div class="navbar-extra">
      <a href="akun"><i data-feather="user"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Layanan Konsultasi Kesehatan Mental</h1>
        <p>Tentukan Perjalanan Anda Menuju Kesehatan Mental Optimal</p>
        <a href="#" class="cta">Cek Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End-->

    <!-- Latihan Start -->
    <section id="latihan" class="latihan">
      <h2>Latihan Mandiri</h2>

      <div class="row">
        <div class="latihan-card">
          <img src="img/Group 1 (1).png" alt="" class="latihan-card-img">
          <h3 class="latihan-card-title">Pernafasan</h3>
        </div>

        <div class="latihan-card">
          <img src="img/Group 2 (1).png" alt="" class="latihan-card-img">
          <h3 class="latihan-card-title">Pijat Tubuh </h3>
        </div>
        
        <div class="latihan-card">
          <img src="img/Group 3 (1).png" alt="" class="latihan-card-img">
          <h3 class="latihan-card-title">Relaksasi Otot</h3>
        </div>
      </div>
        

    </section>

    <!-- Latihan End -->

    <!-- Pilih Dokter -->
    <section id="pilihdokter" class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img/doctor.jpg" alt="card image">
          </div>

          <div class="card__content">
            <span class="card__title">Psikiater</span>
            <span class="card__name">Jonson</span>
            <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <button class="card__btn">Detail</button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img/doctor.jpg" alt="card image">
          </div>

          <div class="card__content">
            <span class="card__title">Psikiater</span>
            <span class="card__name">Jonson</span>
            <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <button class="card__btn">Detail</button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img/doctor.jpg" alt="card image">
          </div>

          <div class="card__content">
            <span class="card__title">Psikiater</span>
            <span class="card__name">Jonson</span>
            <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <button class="card__btn">Detail</button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img/doctor.jpg" alt="card image">
          </div>

          <div class="card__content">
            <span class="card__title">Psikiater</span>
            <span class="card__name">Jonson</span>
            <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <button class="card__btn">Detail</button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img/doctor.jpg" alt="card image">
          </div>

          <div class="card__content">
            <span class="card__title">Psikiater</span>
            <span class="card__name">Jonson</span>
            <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <button class="card__btn">Detail</button>
          </div>
        </div>

      </div>
    </section>
    <!-- Pilih Dokter End -->

    <!-- Artikel -->
    <section id="artikel" class="artikel"></section>
    <div class="artikel-container">
      <div class="artikel">
        <img src="img/artikel.png" alt="">
        <div class="artikel-content">
          <h3>Artikel 1</h3>
          <p>Lorem ipsum dolor sit amet.</p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>
      <div class="artikel">
        <img src="img/artikel.png" alt="">
        <div class="artikel-content">
          <h3>Artikel 1</h3>
          <p>Lorem ipsum dolor sit amet.</p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>
      <div class="artikel">
        <img src="img/artikel.png" alt="">
        <div class="artikel-content">
          <h3>Artikel 1</h3>
          <p>Lorem ipsum dolor sit amet.</p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>
    </div>
    <!-- Artikel End -->

    <!-- Footer Start -->
    <footer>
      <h3>Find Me On</h3>
      <div class="socials">
        <a href=""><i data-feather="twitter"></i></a>
        <a href=""><i data-feather="facebook"></i></a>
        <a href=""><i data-feather="instagram"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#latihan">Latihan</a>
        <a href="#pilihdokter">Pilih Dokter</a>
        <a href="#artikel">Artikel</a>
      </div>

      <div class="credit">
        <p> &copy; Mentalku 2024</p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>

  </body>
</html>
