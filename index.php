<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cashless</title>
  <meta property="og:title" content="Alege plățile fără cash">
  <meta property="og:description" content="Campanie informare beneficii plăți fără cash">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://faracash.md" />
  <meta property="og:image" content="https://faracash.md/images/front-image.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" type="image/x-icon" href="/images/favicon.png">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css?env=<?=mt_rand(1,1000000)?>">
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WXZ94T9M');
  </script>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXZ94T9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__item">
              <a class="menu__link" href="#security">Securitate</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#application">Aplicație Mobilă</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#benefits">Beneficii</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#cashback">Cashback</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#questions">FAQ</a>
            </li>
          </ul>
          <button class="menu__btn" type="button">
            <span></span>
            <span></span>
            <span></span>
            <span class="sr-only">deschide un meniu</span>
          </button>
        </nav>
        <div class="header__content">
          <div class="header__info">
            <span class="header__legend">#fărăcash</span>
            <h1 class="header__title">
              Alege să plătești cu cardul
            </h1>
            <p class="header__text">
              Plata cu cardul oferă confort și siguranță. Beneficiezi de tranzacții rapide, securizate și programe de
              cashback. Alege
              o metodă modernă de plată.
            </p>
          </div>
          <img class="header__img" src="images/card.png" alt="plata cu cardul">
        </div>
      </div>
    </div>
  </header>

  <main class="main">

    <section id="security" class="security section">
      <div class="container">
        <h2 class="title">
          Protejează-ți <span>banii</span> cu încredere
        </h2>
        <a class="video security__video" href="https://www.youtube.com/watch?v=bRSx4pjJEjA" data-fancybox>
          <div class="video__inner">
            <div class="video__box">
              <h3 class="video__title title">
                Indiferent de ce se întâmplă cu cardul, banii rămân ai tăi
              </h3>
              <span class="video__link">Află mai multe</span>
            </div>
            <img class="video__img" src="images/video/video-1.png" 
              alt="banii sunt mereu cu tine">
          </div>
        </a>
        <ul class="security__list">
          <div class="security__list--row">
            <li class="security__item security__item--data">
              <div class="security__box">
                <h4 class="name">
                  Păstrează datele cardului în siguranță
                </h4>
                <p class="security__text">
                  Memorează PIN-ul și păstrează-l separat de card. În plus, nu alege un PIN care este ușor de ghicit, cum
                  ar
                  fi date de
                  naștere sau cifre consecutive.
                </p>
              </div>
            </li>
            <li class="security__item security__item--pin">
              <div class="security__box">
                <h4 class="name">
                  Păstrează cardul și PIN-ul în siguranță
                </h4>
                <p class="security__text">
                  Nu salva PIN-ul pe telefonul fără parolă sau înscris pe card. Fii atent ca datele cardului să nu fie
                  vizibile pentru
                  alte persoane când îl folosești.
                </p>
              </div>
            </li>
          </div>
          <div class="security__list--row">
            <li class="security__item security__item--protection">
              <div class="security__box">
                <h4 class="name">
                  Protejează informațiile cardului
                </h4>
                <p class="security__text">
                  Nu comunica informațiile cardului (numărul complet de pe față, data expirării și codul CVV2/ CVC2 de pe
                  spate) nimănui.
                  Nici angajaților băncii.
                </p>
              </div>
            </li>
            <li class="security__item security__item--control">
              <div class="security__box security__box--control">
                <h4 class="name">
                  Monotorizează toate tranzacțiile
                </h4>
                <p class="security__text">
                  Monitorizează tranzacțiile recente prin aplicația băncii pentru a identifica orice activitate suspectă.
                  Raportează
                  băncii tale orice tranzacție suspectă.
                </p>
              </div>
            </li>
          </div>
        </ul>
      </div>
    </section>

    <section id="application" class="application section">
      <div class="container">
        <h2 class="title application__title">
          Alege să faci <span>tranzacții</span> cu aplicația bancară
        </h2>
        <span class="application__info">
          Selectează banca ta:
        </span>
        <ul class="application__list">
          <li class="application__item">
            <a class="application__btn application__btn--active" href="#" id="maibbank">
              <img class="application__img" src="images/banks/maib.svg" style="min-width: 150px; min-height: 20px;" width="85px" height="24px" alt="maib bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="comertbank">
              <img class="application__img" src="images/banks/comert.svg" style="min-width: 150px; min-height: 20px;" width="170px" height="24px"
                alt="bc comert bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="victoriabank">
              <img class="application__img" src="images/banks/victoria.svg" style="min-width: 150px; min-height: 20px;" width="124px" height="24px"
                alt="victoria bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="moldincombank">
              <img class="application__img" src="images/banks/moldindcon.svg" style="min-width: 150px; min-height: 20px;" width="145px" height="24px"
                alt="moldindconbank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="eurocreditbank">
              <img class="application__img" src="images/banks/evrocredit.svg" style="min-width: 150px; min-height: 20px;" width="158px" height="24px"
                alt="eurocreditbank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="otpbank">
              <img class="application__img" src="images/banks/otp.svg" style="min-width: 150px; min-height: 20px;" height="24px" width="112px" alt="otp bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="bcrbank">
              <img class="application__img" src="images/banks/bcr.svg" style="min-width: 150px; min-height: 20px;" width="92px" height="24px" alt="bcr">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="eximbank">
              <img class="application__img" src="images/banks/exim.svg" style="min-width: 150px; min-height: 20px;" width="161px" height="24px" alt="exim bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="procreditbank">
              <img class="application__img" src="images/banks/procredit.svg" style="min-width: 150px; min-height: 20px;" width="124px" height="24px"
                alt="pro credit bank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="energbank">
              <img class="application__img" src="images/banks/energbank.svg" style="min-width: 150px; min-height: 20px;" width="131px" height="24px"
                alt="energbank">
            </a>
          </li>
          <li class="application__item">
            <a class="application__btn" href="#" id="fincombank">
              <img class="application__img" src="images/banks/fincombank.svg" style="min-width: 150px; min-height: 20px;" width="118px" height="24px"
                alt="fincombank">
            </a>
          </li>
        </ul>
        <div class="application__box">
          

          <p class="application__text" id="link_maibbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/maibank/id1312754339">App Store</a> și <a href="https://play.google.com/store/search?q=maib&c=apps">Google Play</a>
          </p>
          <p class="application__text" id="link_comertbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/cb-personal/id6478920649">App Store</a> și <a href="https://play.google.com/store/apps/details?id=com.dvh.android.shell.mercury.prod&hl=ro">Google Play</a>
          </p>
          <p class="application__text" id="link_victoriabank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/vb24-mobile/id1321345640?platform=iphone">App Store</a> și <a href="https://play.google.com/store/apps/details?id=com.victoriabank.mobilebank&hl=ro">Google Play</a>
          </p>
          <p class="application__text" id="link_moldincombank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/ro/app/micb-mobile-banking/id964768029?l=ro">App Store</a> și <a href="https://play.google.com/store/apps/details?id=md.micb.mwb.prod&hl=en">Google Play</a>
          </p>
          <p class="application__text" id="link_eurocreditbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/ecbank/id6451968530">App Store</a> și <a href="https://play.google.com/store/apps/details?id=md.ecb.ecbank">Google Play</a>
          </p>
          <p class="application__text" id="link_otpbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/ro/app/otp-mobile-banking-moldova/id1540743039">App Store</a> și <a href="https://play.google.com/store/apps/details?id=md.mobiasbanca.otpdirekt&hl=ro">Google Play</a>
          </p>
          <p class="application__text" id="link_bcrbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/personal-mobile-24banking/id1468112800?platform=iphone">App Store</a> și <a href="https://play.google.com/store/apps/details?id=com.bankflex.android.bcr.retail.x1_0">Google Play</a>
          </p>
          <p class="application__text" id="link_eximbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/eximbank/id1568499214?platform=iphone">App Store</a> și <a href="https://play.google.com/store/apps/details?id=bankflex.android.per.exim.prod.x2_0">Google Play</a>
          </p>
          <p class="application__text" id="link_procreditbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/procredit-moldova/id1401867077">App Store</a> și <a href="https://play.google.com/store/apps/details?id=com.quipugmbh.mobilebanking.moldova">Google Play</a>
          </p>
          <p class="application__text" id="link_energbank">
            Descarcă aplicația în
            <a href="https://apps.apple.com/md/app/energbank-mobile/id6477718509">App Store</a> și <a href="https://play.google.com/store/apps/details?id=com.energbank.android.olbankpf.production">Google Play</a>
          </p>
          <p class="application__text" id="link_fincombank">
            Descarcă aplicația în
            <a href="#https://apps.apple.com/md/app/fincompay-mobile-banking/id1387938038?platform=iphone">App Store</a> și <a href="https://play.google.com/store/search?q=fincombank&c=apps">Google Play</a>
          </p>

          <ul class="application__items">
            <li class="application__content" id="swipper-maibbank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/maib/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/maib/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/maib/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/maib/slide-4.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-eurocreditbank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/eurocredit/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/eurocredit/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/eurocredit/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/eurocredit/slide-4.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-procreditbank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-4.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-5.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-6.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-moldincombank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/moldincom/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/moldincom/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/moldincom/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/moldincom/slide-4.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/moldincom/slide-5.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-fincombank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/fincom/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/fincom/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/fincom/slide-3.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-procreditbank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-4.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-5.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-6.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-7.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-8.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/procredit/slide-9.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
            <li class="application__content" id="swipper-eximbank">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-1.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-2.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-3.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-4.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-5.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="images/slides/exim/slide-6.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="benefits" class="benefits section">
      <div class="container">
        <h2 class="benefits__title title">
          <span>Avantajele</span> plăților cu cardul
        </h2>
        <a class="video benefits__video" href="https://youtu.be/RqaxKQYAESI" data-fancybox>
          <div class="video__inner">
            <div class="video__box">
              <h3 class="video__title title head">
                Facturile pot fi achitate fără cozi interminabile
              </h3>
              <span class="video__link">Află mai multe</span>
            </div>
            <img class="video__img benefits__img" src="images/video/video-2.png" alt="">
          </div>
        </a>
        <ul class="benefits__list">
          <li class="benefits__item benefits__item--security">
            <h4 class="name benefits__name benefits__name--first">
              Te simți în siguranță pe stradă
            </h4>
            <p class="benefits__text">
              Banii fizici te expun hoților, iar cash-ul pierdut nu poate fi recuperat. Cardul îți oferă acces sigur și
              rapid la
              economiile tale. În caz de furt, poți bloca cardul imediat din aplicație sau printr-un apel la banca ta.
            </p>
          </li>
          <li class="benefits__item benefits__item--stable">
            <h4 class="name benefits__name">
              Uiți de rest, plătești exact
            </h4>
            <p class="benefits__text">
              Într-o lume rapidă, numărarea restului și căutarea mărunțișului îți fură timp prețios. Cu un card, achiți
              exact suma
              necesară și ții evidența cheltuielilor simplu și eficient.
            </p>
          </li>
          <li class="benefits__item benefits__item--confusion">
            <h4 class="name benefits__name">
              Nu mai încurci suta cu un leu
            </h4>
            <p class="benefits__text">
              Bancnotele fizice te pot deruta când ești în grabă. Unele chiar seamănă, iar pe altele nu mai ții minte
              prin ce buzunar
              le-ai pus. Cu cardul ai mai puține griji și poți fi atent la ceea ce cu adevărat contează.
            </p>
          </li>
        </ul>
      </div>
    </section>

    <section id="cashback" class="cashback section">
      <div class="container">
        <div class="cashback__inner">
          <div class="cashback__info">
            <h2 class="cashback__title title">
              Beneficiază de <span>cashback</span>
            </h2>
            <p class="cashback__text">
              Cashback-ul este o facilitate prietenoasă ce reprezintă returnarea unei părți din suma achitată cu cardul
              de
              cumpărături. Astfel, procente din banii cheltuiți ți se întorc pe card și pot fi utilizați, în continuare,
              pentru
              alte cumpărături.
            </p>
          </div>
          <a class="video cashback__video" href="https://youtu.be/sJoqkD8aWa4" data-fancybox
            style="background-image: url('images/video/video-3.png');">
            <span class="video__link cashback__link">Află mai multe</span>
          </a>
        </div>
        <ul class="cashback__list">
          <li class="cashback__item cashback__item--active">
            <div class="cashback__item--img-container">
              <img src="./images/decor/new/cashback.png" class="cashback__item--img" alt="decor">
            </div>
            <h3 class="subtitle">
              Cashback Activ
            </h3>
            <p class="cashback__text">
              Verifică la banca ta dacă oferă cashback pe cardul emis pe numele tău direct.
            </p>
          </li>
          <li class="cashback__item cashback__item--card">
            <div class="cashback__item--img-container">
              <img src="./images/decor/new/card.png" alt="decor" class="cashback__item--img">
            </div>
            <h3 class="subtitle">
              Achită cu Cardul
            </h3>
            <p class="cashback__text">
              Plătește la magazine cu cardul, cu telefonul sau realizează rapid o tranzacție online.
            </p>
          </li>
          <li class="cashback__item cashback__item--promotions">
            <div class="cashback__item--img-container">
              <img src="./images/decor/new/promotions.png" alt="decor" class="cashback__item--img promotions__item--img">
            </div>
            <h3 class="subtitle">
              Promoții și Oferte
            </h3>
            <p class="cashback__text">
              Informează-te și urmărește promoțiile sezonului și ofertele speciale disponibile.
            </p>
          </li>
          <li class="cashback__item cashback__item--partners">
            <div class="cashback__item--img-container">
              <img src="./images/decor/new/pas.png" alt="decor" class="cashback__item--img">
            </div>
            <h3 class="subtitle">
              Parteneri Cashback
            </h3>
            <p class="cashback__text">
              Verifică la banca ta lista de magazine partenere la care beneficiezi de cashback.
            </p>
          </li>
        </ul>
        <a class="video cashback__video-link" href="https://youtu.be/V3WTCayw78E" data-fancybox>
          <div class="video__inner">
            <div class="video__box cashback__video-box">
              <h3 class="video__title title head">
                Ai nevoie doar de un număr de telefon ca să transferi bani
              </h3>
              <span class="video__link">Află mai multe</span>
            </div>
            <img class="video__img benefits__img" src="images/video/video-4.png" alt="">
          </div>
        </a>
      </div>
    </section>

    <section id="questions" class="questions">
      <div class="container">
        <div class="questions__inner">
          <h2 class="questions__title title">
            Întrebări frecvente
          </h2>
          <ul class="questions__list">
            <li class="questions__item">
              <div class="questions__info">
                <h3 class="questions__name subtitle">
                  Cum fac un transfer?
                </h3>
                <button class="questions__btn" type="button">
                  <span class="sr-only">open accordeon</span>
                </button>
              </div>
              <div class="questions__box">
                <p class="questions__text" style="min-height: 0;">
                  Selectează din aplicația băncii tale opțiunea Transferuri. Introdu datele destinatarului. Poți
                  transfera bani inclusiv
                  de pe cardul tău pe un alt card emis pe numele tău. Introdu suma exactă. Unele aplicații permit și
                  selectarea valutei.
                  Autorizează și confirmă transferul. Unele aplicații o fac prin SMS sau prin biometrie (scanare facială
                  sau scanare
                  amprentă). Gata! Transferul a fost efectuat în câteva secunde.
                </p>
              </div>
            </li>
            <li class="questions__item">
              <div class="questions__info">
                <h3 class="questions__name subtitle">
                  Ce înseamnă transferuri P2P?
                </h3>
                <button class="questions__btn" type="button">
                  <span class="sr-only">open accordeon</span>
                </button>
              </div>
              <div class="questions__box">
                <p class="questions__text" style="min-height: 0;">
                  Poți transfera bani prietenilor și familiei direct din aplicația băncii tale. Acest serviciu este numit P2P și funcționează eficient și rapid, indiferent dacă vorbim despre cardurile emise de aceeași bancă sau despre transferurile dintre carduri emise de bănci străine. Important este să verifici comisionul, care este stabilit individual, de fiecare bancă în parte.
                </p>
              </div>
            </li>
            <li class="questions__item">
              <div class="questions__info">
                <h3 class="questions__name subtitle">
                  Am uitat PIN-ul, ce fac?
                </h3>
                <button class="questions__btn" type="button">
                  <span class="sr-only">open accordeon</span>
                </button>
              </div>
              <div class="questions__box">
                <p class="questions__text" style="min-height: 0;">
                  Dacă ai uitat PIN-ul, nu te panica. Pierderea sau uitarea PIN-ului nu este o situație fără soluție. Contactează banca la serviciul de asistență și raportează problema. Furnizează informațiile necesare și fii pregătit să oferi informații despre cardul tău și să-ți confirmi identitatea.Vizitează o sucursală a băncii pentru a depune o cerere de reemitere a unui nou card, dacă este necesar.
Acest proces se poate rezolva rapid, chiar și din aplicația băncii, fără a fi nevoie să mergi la sucursală sau să telefonezi, în funcție de serviciile oferite de banca ta.
                </p>
              </div>
            </li>
            <li class="questions__item">
              <div class="questions__info">
                <h3 class="questions__name subtitle">
                  Mi-am pierdut cardul, ce fac?
                </h3>
                <button class="questions__btn" type="button">
                  <span class="sr-only">open accordeon</span>
                </button>
              </div>
              <div class="questions__box">
                <p class="questions__text" style="min-height: 0;">
                  E natural să îți faci griji în cazul în care ți-ai pierdut cardul, dar poți fi sigur că se rezolvă rapid. Cardul fizic, indiferent de ce se întâmplă cu el, poate fi oricând înlocuit, în timp ce banii rămân în absolută siguranță pe contul tău. Nu ai nevoie să vizitezi sucursala sau să telefonezi banca. Poți bloca cardul furat direct din aplicația băncii. Important e să reacționezi rapid!
                  <br> În cazul în care nu găsești această funcționalitate în aplicație, informează banca despre pierderea sau furtul cardului printr-un apel la serviciul de asistență. Furnizează informații despre card și identitatea ta. Banca va bloca acel card și te va informa despre cum poți obține o înlocuire.
                </p>
              </div>
            </li>
            <li class="questions__item">
              <div class="questions__info">
                <h3 class="questions__name subtitle">
                  Mi-au furat sau am pierdut telefonul cu cardul setat în Apple Pay/Google Pay. Ce fac?
                </h3>
                <button class="questions__btn" type="button">
                  <span class="sr-only">open accordeon</span>
                </button>
              </div>
              <div class="questions__box">
                <p class="questions__text" style="min-height: 0;">
                  Blochează imediat token-ul din contul tău Google/ Apple, mergi la sucursala băncii tale și blochează aplicația, apoi blochează SIM-ul pierdut la operatorul de telefonie mobilă. Pe noul telefon vei avea nevoie să înrolezi din nou cardul în wallet.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <img class="footer__img" src="images/footer-line.svg" alt="#faracash">
        <div class="footer__content">
          <p class="footer__text">
            Campania #FărăCash este organizată de Asociaţia Băncilor din Moldova,
            în parteneriat cu Visa și cu sprijinul tuturor băncilor comerciale din Moldova. Cu suportul Proiectului
            Tehnologiile
            Viitorului
            finanţat de USAID, Suedia și Marea Britanie.
          </p>
          <ul class="social">
            <li class="social__item">
              <a class="social__link" href="#">
                <img class="social__img" src="images/social-icons/abm.svg" width="102px" height="32px" alt="abm">
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="#">
                <img class="social__img" src="images/social-icons/visa.svg" width="93px" height="32px" alt="visa">
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="#">
                <img class="social__img" src="images/social-icons/usaid.png" width="60px" height="auto" alt="visa">
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="#">
                <img class="social__img" src="images/social-icons/suedia.svg" width="108px" height="32px"
                  alt="suedia  sverige">
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="#">
                <img class="social__img" src="images/social-icons/ukaid.svg" width="43px" height="48px" alt="ukaid">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXZ94T9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

</body>

</html>