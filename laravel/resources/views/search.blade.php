<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>MedEase - Melayani dengan Sepenuh Hati.</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/meanmenu.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!-- header begin -->
    <header>
    <div class="top-bar d-none d-md-block">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-7 offset-md-1">
            <div class="header-info">
              <span><i class="fas fa-phone"></i> (406) 555-0120 </span>
              <span><i class="fas fa-envelope"></i> info@example.com</span>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-4">
            <div class="header-top-right-btn f-right">
              <a href="/daftar" class="btn">DAFTAR SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- menu-area -->
    <div class="header-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
            <div class="logo logo-circle pos-rel">
              <a href="/home"><img src="img/logo/logo.png" alt="" /></a>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9">
            <div class="header-left f-left">
              <div class="header-lang f-right pos-rel d-none d-lg-block">
              </div>
              <div class="header__menu f-right">
                <nav id="mobile-menu">
                  <ul>
                    <li>
                      <a href="/home">Home</a>
                    </li>
                    <li>
                      <a href="/bataldaftar">Batal Daftar</a>
                    </li>
                    <li>
                      <a href="/antrean">Cek Antrean</a>
                    </li>
                    <li>
                      <a href="/artikel">Artikel</a>
                    </li>
                    <li>
                      <a href="/aboutus">About Us</a>
                    </li>
                    <li>
                      <a href="/login" class="">Admin</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!-- header end -->


<body>

    <div class="container mt-5" style="margin-bottom: 200px;">
        <h5>Hasil Pencarian untuk "{{ $keyword }}"</h5>

        @if(count($artikels) > 0)
            <ul>
                @foreach($artikels as $artikel)
                <article class="postbox post format-image mb-40">
              
              <div class="postbox__text p-50">
              <div class="postbox__thumb">
              @if ($artikel->gambar)
              <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar Artikel"  style="max-width: 600px; max-height: 550px; margin-bottom: 25px">
    @endif
              </div>
                <div class="post-meta mb-15">
                  <span><i class="far fa-calendar-check" style="color: #0E5895;"></i> {{ $artikel->created_at->format('d F Y') }}
 </span>
                </div>
                <div class="post-meta mb-15">

                <h3 class="blog-title" style="margin-right: 350px;">
                  <a href="{{ route('artikels.show', $artikel->id) }}">{{ $artikel->judul }}</a>
                </h3>
                </div>
                <div class="post-text mb-20"  style="margin-right: 350px;">
                  <p>
                  {{ Str::limit($artikel->konten, 150) }}
                  </p>
                </div>
                <div class="read-more mt-30">
                  <a href="{{ route('artikels.show', $artikel->id) }}" class="btn-baca">Baca Selengkapnya</a>
                </div>
              </div>
            </article>
                @endforeach
            </ul>
        @else
            <p>Tidak ditemukan artikel dengan kata kunci "{{ $keyword }}".</p>
        @endif
    </div>
    

<!-- footer start -->
<footer>
      <div class="footer-top pt-115 pb-90" style="background-color: #0E5895;">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
              <div class="footer-contact-info mb-30">
                <div class="emmergency-call fix">
                  <div class="emmergency-call-icon f-left">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="emmergency-call-text f-left">
                    <h6>Nomor darurat</h6>
                    <span>(406) 555-0120</span>
                  </div>
                </div>
                <div class="footer-logo mb-35">
                  <a href="" ><img src="img/logo/footer-logo.png" alt="" /></a>
                </div>
                <div class="footer-contact-content mb-25">
                  <p>MedEase merupakan aplikasi pendaftaran secara online untuk fasilitas kesehatan Puskesmas Polowijen yang berada di Kota Malang. Kami melayani anda dengan sepenuh hati!</p>
                </div>
                <div class="footer-emailing">
                  <ul>
                    <li><i class="far fa-envelope"></i>info@example.com</li>
                    <li><i class="far fa-clone"></i>https://www.medease.com</li>
                    <li><i class="far fa-flag"></i>Jl. Raden Panji Suroso No.9, Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur 65126</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
              <div class="footer-widget mb-30">
                <div class="footer-title">
                  <h3>Link terkait:</h3>
                </div>
                <div class="footer-menu">
                  <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/bataldaftar">Batal Daftar</a></li>
                    <li><a href="/antrean">Cek Antrean</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-3 d-md-none d-lg-block">
              <div class="footer-widget mb-30">
                <div class="footer-title">
                  <h3>Poliklinik:</h3>
                </div>
                <div class="footer-menu">
                  <ul>
                    <li><a href="#">Umum</a></li>
                    <li><a href="#">Gigi & Mulut</a></li>
                    <li><a href="#">KIA</a></li>
                    <li><a href="#">Lansia</a></li>
                    <li><a href="#">Paru</a></li>
                    <li><a href="#">Psikolog</a></li>
                    <li><a href="#">Gizi</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom pt-25 pb-20">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="footer-copyright text-center">
                <p class="white-color">Copyright by@ MedEase Team - 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/one-page-nav-min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/jquery.meanmenu.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body> 
</html>
