<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details - Consulting Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/main.js" defer></script>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Consulting
  * Template URL: https://bootstrapmade.com/bootstrap-consulting-website-template/
  * Updated: May 01 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">İŞ BULMA.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php#hero">ANA SAYFA</a></li>
    <li><a href="index.php#about">BİZİM HAKIMIZDA></a></li>
    <li><a href="index.php#why-choose-us">NEDEN BİZİ SEÇMELİSİNİZ</a></li>
    <li class="dropdown">
      <a href="#" class="active"><span>İŞ İLANLARI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
              <li class="dropdown">
      <a href="#"><span>Sağlık</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Doktor</a></li>
        <li><a href="#">Hemşire</a></li>
        <li><a href="#">Eczacı</a></li>
        <li><a href="#">Fizyoterapist</a></li>
        <li><a href="#">Sağlık Teknikeri</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Satış ve Pazarlama</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Satış Temsilcisi</a></li>
        <li><a href="#">Dijital Pazarlama</a></li>
        <li><a href="#">Sosyal Medya Uzmanı</a></li>
        <li><a href="#">Marka Yöneticisi</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Finans / Muhasebe</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Muhasebe Uzmanı</a></li>
        <li><a href="#">Mali Müşavir</a></li>
        <li><a href="#">Finansal Analist</a></li>
        <li><a href="#">Bankacılık</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Hukuk</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Avukat</a></li>
        <li><a href="#">Hukuk Asistanı</a></li>
        <li><a href="#">Danışmanlık</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>İdari / Ofis İşleri</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Sekreter / Asistan</a></li>
        <li><a href="#">Ofis Yöneticisi</a></li>
        <li><a href="#">İnsan Kaynakları</a></li>
        <li><a href="#">Veri Girişi</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Tasarım / Yaratıcı İşler</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Grafik Tasarımcı</a></li>
        <li><a href="#">UI/UX Tasarım</a></li>
        <li><a href="#">Video Editörü</a></li>
        <li><a href="#">Moda Tasarımı</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Lojistik / Ulaşım</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Şoför</a></li>
        <li><a href="#">Kargo / Depo</a></li>
        <li><a href="#">Lojistik Uzmanı</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Turizm / Hizmet</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Resepsiyonist</a></li>
        <li><a href="#">Garson / Barista</a></li>
        <li><a href="#">Temizlik Personeli</a></li>
        <li><a href="#">Tur Rehberi</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#"><span>Freelance / Uzaktan Çalışma</span> <i class="bi bi-chevron-right"></i></a>
      <ul>
        <li><a href="#">Freelance Yazar</a></li>
        <li><a href="#">Uzaktan Destek</a></li>
        <li><a href="#">Freelance Çevirmen</a></li>
      </ul>
    </li>
  </ul>
</li>
          <li><a href="index.php#contact">ILETİŞİM BİLGİLERİ</a></li>
    <li><a href="favoriler.php" id="favoriLink">Favoriler (<span id="favoriSayisi">0</span>)</a></li>
    <?php if (isset($_SESSION['user'])): ?>
      <li class="dropdown">
        <a href="#"><span><?php echo htmlspecialchars($_SESSION['user']); ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
          <li><a href="kullanici.php">Kullanıcı Sayfası</a></li>
          <li><a href="php/logout.php">Çıkış Yap</a></li>
        </ul>
      </li>
    <?php else: ?>
      <li><a href="login.html">Giriş Yap</a></li>
      <li><a href="register.html">Kayıt Ol</a></li>
    <?php endif; ?>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

      <a class="btn-getstarted" href="#consultation">İLAN VER</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>İŞ İLANLARİ</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">ANA SAYFA</a></li>
            <li class="current">İŞ İLANLARİ</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active">SATİŞ PERSONELİ</a>
              <a href="#">YAZILIM GELİŞTİRME UZMANI</a>
              <a href="#">YÖNETMEN</a>
              <a href="#">LOJİSTİK UZMANİ</a>
              <a href="#">DİJİTAL PAZARLAMA UZMANI</a>
            </div>

            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <section id="ilanlar" class="section">
  <div class="container">
    <h2 class="text-center mb-5">Güncel Satış Temsilcisi İlanları</h2>
    <div class="row" id="ilanListesi">
      <!-- JavaScript ile buraya kartlar basılacak -->
    </div>
  </div>
</section>


        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>ADRES</h4>
            <p>İSTANBUL 29 MAYIS ÜNİVERSİTESİ</p>
            <p>Elmalıkent Mah. Elmalıkent Cad. No:4, 34764 Ümraniye/İstanbul</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>İLETİŞİM BİLGİLERİ</h4>
            <p>
              <strong>Phone:</strong> <span>+90 534 494 0931</span><br>
              <strong>Email:</strong> <span>yuldoshevm22@29mayis.edu.tr</span><br>
            </p>
          </div>
        </div>

        
         
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>BİZİ TAKİP EDİN</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">İŞ BULMA.</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js" defer></script>

</body>

</html>