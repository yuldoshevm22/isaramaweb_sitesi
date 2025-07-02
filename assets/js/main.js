/**
* Template Name: Consulting
* Template URL: https://bootstrapmade.com/bootstrap-consulting-website-template/
* Updated: May 01 2025 with Bootstrap v5.3.5
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /*
   * Pricing Toggle
   */

  const pricingContainers = document.querySelectorAll('.pricing-toggle-container');

  pricingContainers.forEach(function(container) {
    const pricingSwitch = container.querySelector('.pricing-toggle input[type="checkbox"]');
    const monthlyText = container.querySelector('.monthly');
    const yearlyText = container.querySelector('.yearly');

    pricingSwitch.addEventListener('change', function() {
      const pricingItems = container.querySelectorAll('.pricing-item');

      if (this.checked) {
        monthlyText.classList.remove('active');
        yearlyText.classList.add('active');
        pricingItems.forEach(item => {
          item.classList.add('yearly-active');
        });
      } else {
        monthlyText.classList.add('active');
        yearlyText.classList.remove('active');
        pricingItems.forEach(item => {
          item.classList.remove('yearly-active');
        });
      }
    });
  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });
  const ilanlar = [
  {
    id: 201,
    pozisyon: "Satış Temsilcisi",
    firma: "TrendMağaza",
    tip: "Tam Zamanlı",
    aciklama: "Perakende sektöründe müşteri ilişkileri güçlü ekip arkadaşı arıyoruz."
  },
  {
    id: 202,
    pozisyon: "Müşteri Temsilcisi",
    firma: "BilişimNet",
    tip: "Yarı Zamanlı",
    aciklama: "Teknolojik ürünlerin satışında görev alacak personel alınacaktır."
  },
  {
    id: 203,
    pozisyon: "Saha Satış Uzmanı",
    firma: "İdealElektrik",
    tip: "Tam Zamanlı",
    aciklama: "Fabrika sahasında müşteri görüşmeleri yapacak satış uzmanı arıyoruz."
  },
  {
    id: 204,
    pozisyon: "Perakende Satış Danışmanı",
    firma: "MedikaPlus",
    tip: "Yarı Zamanlı",
    aciklama: "Medikal ürünlerin tanıtımında deneyimli saha personeli arıyoruz."
  },
  {
    id: 205,
    pozisyon: "İç Satış Sorumlusu",
    firma: "Megaİletişim",
    tip: "Tam Zamanlı",
    aciklama: "Çağrı merkezinde hedef odaklı satış danışmanı arıyoruz."
  },
  {
    id: 206,
    pozisyon: "Satış Destek Uzmanı",
    firma: "BioMarket",
    tip: "Yarı Zamanlı",
    aciklama: "Organik ürün satış noktalarında görev alacak temsilciler arıyoruz."
  },
  {
    id: 207,
    pozisyon: "Satış ve Pazarlama Asistanı",
    firma: "CityMobilya",
    tip: "Tam Zamanlı",
    aciklama: "Mobilya showroom'umuzda deneyimli satış danışmanı arıyoruz."
  }
];


window.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("ilanListesi");

  ilanlar.forEach((ilan) => {
    const card = document.createElement("div");
    card.className = "col-md-6 col-lg-4 mb-4";
    card.innerHTML = `
      <div class="job-card">
        <button class="fav-btn" onclick="addToFavorites(this)">
          <i class="bi bi-star"></i>
        </button>
        <h5>${ilan.pozisyon}</h5>
        <p class="text-muted"><strong>Şirket:</strong> ${ilan.firma}</p>
        <p class="job-type">${ilan.tip}</p>
        <p>${ilan.aciklama}</p>
        <div class="d-flex justify-content-between mt-3">
          <a href="job-details.html?id=${ilan.id}" class="btn btn-outline-secondary btn-sm">Detaylar</a>
          <a href="apply.html?job=${ilan.id}" class="btn btn-primary btn-sm">Başvur</a>
        </div>
      </div>
    `;
    container.appendChild(card);
  });
});

  

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  // 1. Firebase ayarları (bunları kendi projenle değiştir!)
const firebaseConfig = {
  apiKey: "SENİN_API_KEY",
  authDomain: "SENIN_PROJE.firebaseapp.com",
  projectId: "SENIN_PROJE_ID",
  appId: "SENIN_APP_ID"
};

// 2. Firebase başlat
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
const provider = new firebase.auth.GoogleAuthProvider();

// 3. Google ile giriş fonksiyonu
function googleLogin() {
  auth.signInWithPopup(provider)
    .then((result) => {
      const user = result.user;
      alert("Hoş geldin, " + user.displayName);
      // Burada kullanıcıyı yönlendirebilir veya veritabanına kaydedebilirsin
    })
    .catch((error) => {
      console.error("Giriş hatası:", error);
    });
}
// Favori ekle/çıkar fonksiyonu
function toggleFavori(id) {
  let favoriler = JSON.parse(localStorage.getItem("favoriler")) || [];
  id = String(id);
  if (favoriler.includes(id)) {
    favoriler = favoriler.filter(favId => favId !== id);
  } else {
    favoriler.push(id);
  }
  localStorage.setItem("favoriler", JSON.stringify(favoriler));
  updateFavoriStars();
  updateFavoriSayisi();
}

// Favori yıldızlarını güncelle
function updateFavoriStars() {
  let favoriler = JSON.parse(localStorage.getItem("favoriler")) || [];
  document.querySelectorAll('.favori-star').forEach(star => {
    if (favoriler.includes(star.dataset.id)) {
      star.innerHTML = '<i class="bi bi-star-fill text-warning"></i>';
    } else {
      star.innerHTML = '<i class="bi bi-star"></i>';
    }
  });
}

// Favori sayısını güncelle
function updateFavoriSayisi() {
  let favoriler = JSON.parse(localStorage.getItem("favoriler")) || [];
  let favoriSayisi = document.getElementById("favoriSayisi");
  if (favoriSayisi) favoriSayisi.textContent = favoriler.length;
}

// Yıldızlara tıklama eventi
document.addEventListener("DOMContentLoaded", function() {
  document.body.addEventListener("click", function(e) {
    if (e.target.closest('.favori-star')) {
      const id = e.target.closest('.favori-star').dataset.id;
      toggleFavori(id);
    }
  });
  updateFavoriStars();
  updateFavoriSayisi();
});
  

  


})();