<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>İŞ BULMA SİTESİ</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">İŞ BULMA.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">ANA SAYFA</a></li>
          <li><a href="#about">BİZİM HAKIMIZDA></a></li>
         <!-- <li><a href="#services">SERVİSLER</a></li>-->
          <li><a href="#why-choose-us">NEDEN BİZİ SEÇMELİSİNİZ</a></li>
          <!--<li><a href="#team">İŞ REHBERİ</a></li>-->
         <li class="dropdown">
  <a href="service-details.htmlphp"><span>İŞ İLANLARI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
          <li><a href="#contact">ILETİŞİM BİLGİLERİ</a></li>
          <?php if (isset($_SESSION['user'])): ?>
  <li class="dropdown">
    <a href="#"><span><?php echo htmlspecialchars($_SESSION['user']); ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
      <li><a href="php/kullanici.php">Kullanıcı Sayfası</a></li>
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

      <a class="btn-getstarted" href="ilanform.php">ÜCRETSİZ İLAN VER</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h2>BİZİMLE İŞ BULMAK DAHA KOLAY</h2>
              <p>"Binlerce ilan arasından sana en uygun işi birlikte bulalım. Güvenilir işverenler, etkili destek ve hızlı başvuru sistemiyle iş bulmak bizimle daha kolay."</p>
              <div class="hero-btns">
                <a href="#consultation" class="btn btn-primary">Hemen Başla</a>
                <a href="#services" class="btn btn-outline">Bizim Hizmetletimiz</a>
              
              </div>
              <div class="hero-stats">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>YILLIK TECRÜBEMİZ</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>YURT DIŞI ORTAKLARIMIZ</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>%</h3>
                  <p>İŞ BULMA ORANI</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/pexels-buro-millennial-636760-1438072.jpg" alt="Consulting Services" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/pexels-fauxels-3184291.jpg" alt="About Our Consulting Firm" class="img-fluid main-image">
              <div class="experience-badge">
                <span class="years">15+</span>
                <span class="text">Yıllık Tecrübe</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
  <div class="about-content">
    <h2>İŞ BULMA YOLCULUĞUNUZDA, KENDİ GÜCÜNÜZÜ BİZİM DESTEĞİMİZLE BİRLEŞTİRİYORUZ.</h2>
    <p class="lead">Türkiye'nin dört bir yanındaki en güncel iş ilanlarını sizin için tek bir platformda topladık. Size en uygun işi bulun, kariyerinize güvenle yön verin.</p>
    <p>İş Bulma platformu; adaylarla işverenleri güvenli, hızlı ve etkili bir sistemle buluşturan bir kariyer destek merkezidir. Misyonumuz, iş arama sürecini hem kolaylaştırmak hem de doğru eşleşmelerle zaman kaybını önlemektir. Alanında uzman ekibimizle, sadece ilan sunmakla kalmıyor; aynı zamanda kariyer rehberliği, CV hazırlama ve mülakat desteğiyle yol arkadaşınız oluyoruz.</p>

    <div class="row features-row">
      <div class="col-md-6">
        <div class="feature-item">
          <div class="icon">
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <h4>Kariyer Gelişimi</h4>
          <p>Sunduğumuz araçlarla iş arama sürecinizi daha etkili ve hedef odaklı hale getiriyoruz.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-item">
          <div class="icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h4>Akıllı Eşleştirme</h4>
          <p>Yeteneklerinizi analiz ederek size en uygun ilanları otomatik olarak öneriyoruz.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-item">
          <div class="icon">
            <i class="bi bi-people"></i>
          </div>
          <h4>Uzman Destek Ekibi</h4>
          <p>Kariyer danışmanlarımız size CV hazırlama ve mülakat öncesi danışmanlık sunar.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-item">
          <div class="icon">
            <i class="bi bi-trophy"></i>
          </div>
          <h4>Başarı Odaklı Sonuçlar</h4>
          <p>Binlerce aday bizimle hayalindeki işe kavuştu. Şimdi sıra sizde!</p>
        </div>
      </div>
    </div>

    <div class="cta-button">
      <a href="#about" class="btn btn-primary">Hakkımızda Daha Fazla Bilgi</a>
    </div>
  </div>
</div>
</div>
</div>
</section><!-- /About Section -->

<!-- Work Process Section -->
<section id="work-process" class="work-process section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>İş Bulma Sürecimiz</h2>
    <div><span>Nasıl</span> <span class="description-title">Çalışıyoruz?</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="steps-content">
          <h2>Adım Adım İşe Ulaşın</h2>
          <p class="lead">İş arama sürecinizi kolaylaştırmak için size özel planlanmış adımlar sunuyoruz.</p>
          <p>Platformumuzda özgeçmişinizi oluşturun, ilanlara başvurun ve kariyer danışmanlarımızdan birebir destek alın. Doğru işe ulaşmak için gereken her adımda yanınızdayız.</p>

          <div class="steps-cta">
            <a href="#contact" class="btn btn-primary">Başvuruya Başla</a>
            <a href="#about" class="btn btn-outline">Daha Fazla Bilgi</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="300">
        <div class="steps-list">
          <div class="step-item">
            <div class="step-number">01</div>
            <div class="step-content">
              <h3>Kayıt Olun</h3>
              <p>Platformumuza ücretsiz kaydınızı tamamlayarak işe alım sürecine ilk adımı atın.</p>
            </div>
          </div>

          <div class="step-item">
            <div class="step-number">02</div>
            <div class="step-content">
              <h3>CV’nizi Oluşturun</h3>
              <p>Profilinizi güçlendirin, yeteneklerinizi ve deneyimlerinizi profesyonelce sunun.</p>
            </div>
          </div>

          <div class="step-item">
            <div class="step-number">03</div>
            <div class="step-content">
              <h3>İlanlara Başvurun</h3>
              <p>Sizin için önerilen veya kendi seçtiğiniz ilanlara kolayca başvuru yapın.</p>
            </div>
          </div>

          <div class="step-item">
            <div class="step-number">04</div>
            <div class="step-content">
              <h3>İletişimde Kalın</h3>
              <p>İşverenlerden dönüş alın, mülakatlara hazırlanın ve gerekli bilgilere hızlıca ulaşın.</p>
            </div>
          </div>

          <div class="step-item">
            <div class="step-number">05</div>
            <div class="step-content">
              <h3>İşe Yerleşin</h3>
              <p>İşe alım süreciniz başarıyla tamamlandığında, yeni kariyerinize güçlü bir başlangıç yapın.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    </section><!-- /Work Process Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>İş İlanları</h2>
  <div><span>Güncel</span> <span class="description-title">Pozisyonlar</span></div>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4">

    <!-- İş Kartı 1 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-laptop"></i>
        </div>
        <h3>Frontend Geliştirici</h3>
        <p>Modern web uygulamaları geliştirmek için deneyimli frontend geliştiriciler arıyoruz.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> HTML, CSS, JavaScript</li>
          <li><i class="bi bi-check-circle"></i> React veya Vue.js</li>
          <li><i class="bi bi-check-circle"></i> Uzaktan / Tam Zamanlı</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- İş Kartı 2 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-briefcase"></i>
        </div>
        <h3>İnsan Kaynakları Uzmanı</h3>
        <p>İşe alım süreçlerinde görev alacak iletişim yeteneği güçlü takım arkadaşı aranıyor.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> Aday tarama ve mülakat</li>
          <li><i class="bi bi-check-circle"></i> Performans takibi</li>
          <li><i class="bi bi-check-circle"></i> Hibrit Çalışma</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- İş Kartı 3 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-cash-coin"></i>
        </div>
        <h3>Finans Uzmanı</h3>
        <p>Finansal raporlama ve bütçeleme konularında deneyimli adaylar tercih edilecektir.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> Excel ve ERP bilgisi</li>
          <li><i class="bi bi-check-circle"></i> Yıllık bütçe yönetimi</li>
          <li><i class="bi bi-check-circle"></i> Ofis / Tam Zamanlı</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- İş Kartı 4 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-bar-chart-line"></i>
        </div>
        <h3>Satış Temsilcisi</h3>
        <p>Müşteri ilişkileri güçlü, saha veya çağrı merkezi tecrübesi olan takım arkadaşları arıyoruz.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> İkna kabiliyeti</li>
          <li><i class="bi bi-check-circle"></i> Prim sistemi</li>
          <li><i class="bi bi-check-circle"></i> Ofis / Yüz Yüze</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- İş Kartı 5 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-people"></i>
        </div>
        <h3>Sosyal Medya Uzmanı</h3>
        <p>Marka bilinirliğini artıracak yaratıcı ve analitik bir sosyal medya uzmanı arıyoruz.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> İçerik üretimi</li>
          <li><i class="bi bi-check-circle"></i> Meta / Instagram Ads</li>
          <li><i class="bi bi-check-circle"></i> Uzaktan / Yarı Zamanlı</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- İş Kartı 6 -->
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
      <div class="service-card">
        <div class="icon-box">
          <i class="bi bi-megaphone"></i>
        </div>
        <h3>Grafik Tasarımcı</h3>
        <p>Kurumsal kimlik, broşür ve sosyal medya tasarımı yapabilecek yaratıcı grafik tasarımcı aranıyor.</p>
        <ul class="service-features">
          <li><i class="bi bi-check-circle"></i> Adobe Photoshop / Illustrator</li>
          <li><i class="bi bi-check-circle"></i> Portfolyo zorunlu</li>
          <li><i class="bi bi-check-circle"></i> Freelance / Proje Bazlı</li>
        </ul>
        <a href="job-details.html" class="read-more">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>


</div>



    <!-- Consultation Section -->
    <section id="consultation" class="consultation section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>CV Oluşturma Formu</h2>
  <div><span>Hemen</span> <span class="description-title">CV'nizi Oluşturun</span></div>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="cta-wrapper">
    <div class="row align-items-center">
      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
        <div class="cta-content">
          <h2>Kariyerinize Bizimle Yön Verin</h2>
          <p>Sitemize kaydolarak iş başvuru sürecinizi hızlandırabilir, özgeçmişinizle binlerce ilan arasında öne çıkabilirsiniz.</p>
          <div class="cta-stats">
            <div class="stat-item">
              <span class="number"><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="0" class="purecounter">500</span>+</span>
              <span class="text">Yayımlanan CV</span>
            </div>
            <div class="stat-item">
              <span class="number"><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="0" class="purecounter">98</span>%</span>
              <span class="text">Başvuru Memnuniyeti</span>
            </div>
            <div class="stat-item">
              <span class="number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>+</span>
              <span class="text">Yıllık Deneyim</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
        <div class="cta-form">
          <h3>Ücretsiz CV Oluşturun</h3>
          <p>Aşağıdaki formu doldurun, kariyer yolculuğunuzda ilk adımı birlikte atalım.</p>
          <form action="forms/create-cv.php" method="post" class="php-email-form">
            <div class="form-group">
              <input type="text" name="fullname" class="form-control" placeholder="Ad Soyad" required>
            </div>

            <div class="form-group mt-3">
              <input type="email" name="email" class="form-control" placeholder="Email Adresi" required>
            </div>

            <div class="form-group mt-3">
              <input type="tel" name="phone" class="form-control" placeholder="Telefon Numarası">
            </div>

            <div class="form-group mt-3">
              <input type="date" name="birthdate" class="form-control" placeholder="Doğum Tarihi">
            </div>

            <div class="form-group mt-3">
              <textarea name="skills" rows="3" class="form-control" placeholder="Yetenekler / Beceriler (örn: HTML, Java, Satış, Excel...)"></textarea>
            </div>

            <div class="form-group mt-3">
              <textarea name="education" rows="3" class="form-control" placeholder="Eğitim Bilgileri (örn: Lise, Üniversite, Sertifikalar...)"></textarea>
            </div>

            <div class="form-group mt-3">
              <textarea name="experience" rows="3" class="form-control" placeholder="İş Deneyimleri (Varsa belirtin)"></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Yükleniyor...</div>
              <div class="error-message"></div>
              <div class="sent-message">CV'niz başarıyla gönderildi. Teşekkür ederiz!</div>
            </div>

            <div class="text-center">
              <button type="submit">CV'yi Oluştur</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

    </section><!-- /Why Choose Us Section -->

    <!-- Takımımız Bölümü (Orijinal yapı korunarak, içerikler iş ilanı sitesine göre düzenlenmiştir) -->
<section id="team" class="team section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Bizim Takımımız</h2>
    <div><span>Ekibimizi</span> <span class="description-title">Tanıyın</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="team-slider swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 800,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": 1,
          "spaceBetween": 30,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "navigation": {
            "nextEl": ".swiper-button-next",
            "prevEl": ".swiper-button-prev"
          },
          "breakpoints": {
            "576": {
              "slidesPerView": 2
            },
            "992": {
              "slidesPerView": 3
            },
            "1200": {
              "slidesPerView": 4
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/img/person/person-m-3.webp" class="img-fluid" alt="">
              <div class="team-overlay">
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="team-content">
              <h3>Marcus Wilson</h3>
              <span>Kariyer Danışmanı</span>
              <p>İş arayanlara özgeçmiş oluşturma ve başvuru sürecinde rehberlik sağlar.</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/img/person/person-f-5.webp" class="img-fluid" alt="">
              <div class="team-overlay">
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="team-content">
              <h3>Saida Akhunbayeva</h3>
              <span>İnsan Kaynakları Uzmanı</span>
              <p>Doğru adayı doğru işle eşleştirmek için işverenlerle birlikte çalışır.</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/img/person/person-m-8.webp" class="img-fluid" alt="">
              <div class="team-overlay">
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="team-content">
              <h3>İbrohim Askarkhonov</h3>
              <span>Pazarlama Uzmanı</span>
              <p>Platformumuzu daha fazla iş arayan ve işverene ulaştırmak için çalışır.</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/img/person/person-f-9.webp" class="img-fluid" alt="">
              <div class="team-overlay">
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="team-content">
              <h3>Olivia Thompson</h3>
              <span>Yazılım Geliştirici</span>
              <p>Kullanıcı deneyimini geliştirmek için platformumuzun altyapısını oluşturur.</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="team-card">
            <div class="team-image">
              <img src="assets/img/person/person-m-12.webp" class="img-fluid" alt="">
              <div class="team-overlay">
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="team-content">
              <h3>Yuldoshev Mukhammadamin</h3>
              <span>CEO</span>
              <p></p>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>
<!-- /Team Section -->

    </section><!-- /Testimonials Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title 
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Pricing Plans</h2>
        <div><span>Check Our</span> <span class="description-title">Pricing Plans</span></div>
      </div>
      

      <div class="container pricing-toggle-container" data-aos="fade-up" data-aos-delay="100">

        <div class="d-flex align-items-center justify-content-center text-center">
          <div class="pricing-toggle">
            <span class="monthly active">Monthly</span>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
            <span class="yearly">Yearly</span>
            <div class="discount-badge">Save 20%</div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item">
              <div class="pricing-header">
                <h3>Basic Plan</h3>
                <div class="price-monthly">$1,499<span>/mo</span></div>
                <div class="price-yearly">$14,390<span>/year</span></div>
                <p>Perfect for small businesses</p>
              </div>
              <div class="pricing-features">
                <ul>
                  <li><i class="bi bi-check-circle"></i> Business Analysis</li>
                  <li><i class="bi bi-check-circle"></i> Strategic Planning</li>
                  <li><i class="bi bi-check-circle"></i> 10 Consulting Hours</li>
                  <li><i class="bi bi-check-circle"></i> Monthly Report</li>
                  <li><i class="bi bi-x-circle"></i> Market Research</li>
                  <li><i class="bi bi-x-circle"></i> Implementation Support</li>
                  <li><i class="bi bi-x-circle"></i> Dedicated Consultant</li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#contact" class="btn btn-outline">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item featured">
              <div class="pricing-badge">Popular</div>
              <div class="pricing-header">
                <h3>Professional Plan</h3>
                <div class="price-monthly">$2,999<span>/mo</span></div>
                <div class="price-yearly">$28,790<span>/year</span></div>
                <p>Ideal for growing companies</p>
              </div>
              <div class="pricing-features">
                <ul>
                  <li><i class="bi bi-check-circle"></i> Business Analysis</li>
                  <li><i class="bi bi-check-circle"></i> Strategic Planning</li>
                  <li><i class="bi bi-check-circle"></i> 25 Consulting Hours</li>
                  <li><i class="bi bi-check-circle"></i> Weekly Reports</li>
                  <li><i class="bi bi-check-circle"></i> Market Research</li>
                  <li><i class="bi bi-check-circle"></i> Implementation Support</li>
                  <li><i class="bi bi-x-circle"></i> Dedicated Consultant</li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#contact" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item">
              <div class="pricing-header">
                <h3>Enterprise Plan</h3>
                <div class="price-monthly">$4,999<span>/mo</span></div>
                <div class="price-yearly">$47,990<span>/year</span></div>
                <p>For established enterprises</p>
              </div>
              <div class="pricing-features">
                <ul>
                  <li><i class="bi bi-check-circle"></i> Business Analysis</li>
                  <li><i class="bi bi-check-circle"></i> Strategic Planning</li>
                  <li><i class="bi bi-check-circle"></i> 50 Consulting Hours</li>
                  <li><i class="bi bi-check-circle"></i> Weekly Reports</li>
                  <li><i class="bi bi-check-circle"></i> Market Research</li>
                  <li><i class="bi bi-check-circle"></i> Implementation Support</li>
                  <li><i class="bi bi-check-circle"></i> Dedicated Consultant</li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#contact" class="btn btn-outline">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <div class="pricing-note text-center mt-5" data-aos="fade-up" data-aos-delay="600">
          <p>Need a custom solution? <a href="#contact">Contact us</a> for a personalized quote.</p>
        </div>

      </div>-->

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>Sıkça Sorulan Sorular</h2>
  <div><span>Merak Edilen</span> <span class="description-title">Sorular</span></div>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4 justify-content-between">
    <div class="col-lg-8">

      <div class="faq-list">
        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
          <h3>İş başvurusu yapmak için üye olmam gerekiyor mu?</h3>
          <div class="faq-content">
            <p>Evet, ilanlara başvuru yapabilmek için ücretsiz üyelik oluşturmanız gerekmektedir.</p>
          </div>
          <i class="bi bi-plus faq-toggle"></i>
        </div><!-- End FAQ Item-->

        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
          <h3>CV yüklemeden iş başvurusu yapabilir miyim?</h3>
          <div class="faq-content">
            <p>Hayır, sistemimiz işverenlere daha iyi eşleşmeler sunabilmek için başvurular sırasında CV yüklemenizi zorunlu kılar.</p>
          </div>
          <i class="bi bi-plus faq-toggle"></i>
        </div><!-- End FAQ Item-->

        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
          <h3>Başvuru yaptıktan sonra geri dönüş süresi nedir?</h3>
          <div class="faq-content">
            <p>Geri dönüş süresi işverene bağlı olarak değişmektedir. Genellikle 3–7 iş günü içinde size ulaşırlar.</p>
          </div>
          <i class="bi bi-plus faq-toggle"></i>
        </div><!-- End FAQ Item-->

        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
          <h3>İlanlar güncel mi, ne sıklıkla yenileniyor?</h3>
          <div class="faq-content">
            <p>Evet, tüm ilanlarımız günlük olarak kontrol edilip güncellenmektedir. Süresi dolan ilanlar otomatik olarak yayından kaldırılır.</p>
          </div>
          <i class="bi bi-plus faq-toggle"></i>
        </div><!-- End FAQ Item-->

        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
          <h3>İşverenlerle doğrudan iletişime geçebilir miyim?</h3>
          <div class="faq-content">
            <p>Evet, başvurunuz onaylandığında sistemimiz üzerinden işverenle doğrudan iletişim kurabilirsiniz.</p>
          </div>
          <i class="bi bi-plus faq-toggle"></i>
        </div><!-- End FAQ Item-->
      </div>

    </div>

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="faq-card">
        <i class="bi bi-chat-dots-fill"></i>
        <h3>Cevabını bulamadığınız bir soru mu var?</h3>
        <p>Sorularınız için bizimle iletişime geçmekten çekinmeyin. Size yardımcı olmaktan mutluluk duyarız.</p>
        <a href="#contact" class="btn btn-primary">İletişime Geç</a>
      </div>
    </div>
  </div>
</div>


    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>İLETİŞİM</h2>
        <div><span>İLETİŞİM</span> <span class="description-title">BİLGİLERİMİZ</span></div>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-info">
              <div class="contact-card">
                <h3>İLETİŞİM BİLGİLER</h3>
                <p>Feel free to reach out with any questions about the book, speaking engagements, or media inquiries.</p>

                <div class="contact-details">
                  <div class="contact-item">
                    <i class="bi bi-envelope"></i>
                    <div>
                      <h4>Email:</h4>
                      <p>author@example.com</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h4>TELEFON:</h4>
                      <p>+90(534)494 0931</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h4>ADRES:</h4>
                      <p>İSTANBUL 29 MAYİS ÜNİVERSİTESİ</p>
                      <p>Elmalıkent Mah. Elmalıkent Cad. No:4, 34764 Ümraniye/İstanbul</p>
                    </div>
                  </div>
                </div>

                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">İSİM</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="FATİH DEMİR" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="email">E-MAİL BİLGİLER</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="demir@ornek.com" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="subject">KONU</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="İŞ BAŞVURUSUNDA SORUNLAR!" required="">
                </div>
                <div class="form-group mt-3">
                  <label for="message">İLETMEK İSTEDİĞİNİZ MESAJ</label>
                  <textarea class="form-control" name="mesaj" rows="7" placeholder="Sizin mesajiniz..." required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">YÜKLENİYOR</div>
                  <div class="error-message"></div>
                  <div class="sent-message">SİZİN MESAJINIZI GÖNDERİLDİ. TEŞEKKÜR EDERİM!</div>
                </div>

                <div class="text-center">
                  <button type="submit">MESAJ GÖNDER</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

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