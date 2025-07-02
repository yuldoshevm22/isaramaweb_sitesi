<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İlan Ver | İş Bulma</title>
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="ilanform-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- <img src="assets/img/logo.webp" alt=""> -->
      <h1 class="sitename">İŞ BULMA.</h1>
    </a>
    <nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php#hero">ANA SAYFA</a></li>
    <li><a href="index.php#about">BİZİM HAKIMIZDA></a></li>
    <li><a href="index.php#why-choose-us">NEDEN BİZİ SEÇMELİSİNİZ</a></li>
    <li class="dropdown">
      <a href="#"><span>İŞ İLANLARI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
    <li><a class="btn-getstarted active" href="ilanform.php">ÜCRETSİZ İLAN VER</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

   
</header>



  <section class="ilan-ver-section py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- Sol: Başlık ve görsel -->
        <div class="col-md-5 mb-4 mb-md-0">
          <h2 class="section-title">İlanını Kolayca Yayınla</h2>
          <p class="text-muted">Şirketinizin ilanını birkaç adımda oluşturun, doğru adaylara ulaşın.</p>
          <img src="assets/img/ilan-ver.png" alt="İlan Ver" class="img-fluid rounded shadow">
        </div>

        <!-- Sağ: Form Alanı -->
        <div class="col-md-7">
          <div class="card p-4 shadow-sm border-0">
            <form action="submit-job.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="fullname" class="form-label">İsim Soyisim</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">E-Posta</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Telefon Numarası</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
              <div class="col-md-6">
                <label for="password" class="form-label">Şifre</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="col-12">
                <label for="company" class="form-label">Şirket Adı</label>
                <input type="text" class="form-control" id="company" name="company" required>
              </div>
              <div class="col-md-6">
                <label for="il" class="form-label">İl</label>
                <select class="form-select" id="il" name="il" required>
                  <option value="">Seçiniz</option>
                  <option>İstanbul</option>
                  <option>Ankara</option>
                  <option>İzmir</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="ilce" class="form-label">İlçe</label>
                <input type="text" class="form-control" id="ilce" name="ilce" required>
              </div>
              <div class="col-md-6">
                <label for="vergi-il" class="form-label">Vergi Dairesi İli</label>
                <select class="form-select" id="vergi-il" name="vergi-il" required>
  <option value="">Seçiniz</option>
  <option>Adana</option>
  <option>Adıyaman</option>
  <option>Afyonkarahisar</option>
  <option>Ağrı</option>
  <option>Amasya</option>
  <option>Ankara</option>
  <option>Antalya</option>
  <option>Artvin</option>
  <option>Aydın</option>
  <option>Balıkesir</option>
  <option>Bilecik</option>
  <option>Bingöl</option>
  <option>Bitlis</option>
  <option>Bolu</option>
  <option>Burdur</option>
  <option>Bursa</option>
  <option>Çanakkale</option>
  <option>Çankırı</option>
  <option>Çorum</option>
  <option>Denizli</option>
  <option>Diyarbakır</option>
  <option>Edirne</option>
  <option>Elazığ</option>
  <option>Erzincan</option>
  <option>Erzurum</option>
  <option>Eskişehir</option>
  <option>Gaziantep</option>
  <option>Giresun</option>
  <option>Gümüşhane</option>
  <option>Hakkari</option>
  <option>Hatay</option>
  <option>Isparta</option>
  <option>Mersin</option>
  <option>İstanbul</option>
  <option>İzmir</option>
  <option>Kars</option>
  <option>Kastamonu</option>
  <option>Kayseri</option>
  <option>Kırklareli</option>
  <option>Kırşehir</option>
  <option>Kocaeli</option>
  <option>Konya</option>
  <option>Kütahya</option>
  <option>Malatya</option>
  <option>Manisa</option>
  <option>Kahramanmaraş</option>
  <option>Mardin</option>
  <option>Muğla</option>
  <option>Muş</option>
  <option>Nevşehir</option>
  <option>Niğde</option>
  <option>Ordu</option>
  <option>Rize</option>
  <option>Sakarya</option>
  <option>Samsun</option>
  <option>Siirt</option>
  <option>Sinop</option>
  <option>Sivas</option>
  <option>Tekirdağ</option>
  <option>Tokat</option>
  <option>Trabzon</option>
  <option>Tunceli</option>
  <option>Şanlıurfa</option>
  <option>Uşak</option>
  <option>Van</option>
  <option>Yozgat</option>
  <option>Zonguldak</option>
  <option>Aksaray</option>
  <option>Bayburt</option>
  <option>Karaman</option>
  <option>Kırıkkale</option>
  <option>Batman</option>
  <option>Şırnak</option>
  <option>Bartın</option>
  <option>Ardahan</option>
  <option>Iğdır</option>
  <option>Yalova</option>
  <option>Karabük</option>
  <option>Kilis</option>
              </div>
              <div class="col-md-6">
                <label for="vergi-dairesi" class="form-label">Vergi Dairesi</label>
                <input type="text" class="form-control" id="vergi-dairesi" name="vergi-dairesi" required>
              </div>
              <div class="col-12">
                <label for="vergi-no" class="form-label">Vergi Numarası</label>
                <input type="text" class="form-control" id="vergi-no" name="vergi-no" required>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="kvkk" required>
                  <label class="form-check-label" for="kvkk">
                    Verilerimin KVKK kapsamında işlenmesini kabul ediyorum.
                  </label>
                </div>
              </div>
              <div class="col-12 d-grid">
                <button type="submit" class="btn btn-primary">İlanı Yayınla</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</body>
</html>