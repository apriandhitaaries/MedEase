<!DOCTYPE html>
<html class="no-js" lang="zxx">

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

      <!-- hero-area start -->
      <section class="breadcrumb-bg pt-200 pb-180" data-background="img/page/page-bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-12">
              <div class="page-title">
                <p class="small-text pb-15">Kami di sini untuk perawatan Anda!</p>
                <h1>Pendaftaran Faskes</h1>
                <h3>Puskesmas Polowijen</h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
              <div class="page-breadcumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="/home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- hero-area end -->

    <main>
      <!-- hero-area start -->
      <section class="breadcrumb-bg pos-rel pt-200 pb-180" data-background="img/appoinment/appointment-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 offset-xl-5">
                <div class="calculate-box white-bg" style="border-radius: 60px;">
                    <div class="calculate-content">
                        <div class="about-title news-letter-title mb-70">
                            <h5 class="pink-color" style="color: #1669AD;">Pendaftaran</h5>
                            <h1>Pendaftaran Faskes</h1>
                        </div>

                        <div style="width: 520px; height: 70px; background: #1669AD; border-radius: 10px; margin-bottom: 20px; margin-left: 15px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-hospital" style="font-size: 24px; color: white;"></i>
                            <div style="color: white; font-size: 16px; font-family: Poppins; font-weight: 600; line-height: 25.20px; word-wrap: break-word; margin-left: 10px;">Faskes Puskesmas Polowijen</div>
                        </div>

                        <form class="calculate-form appointment-form-3 mb-20" action="/daftar" method="post">
                            @csrf
                            <div class="col-xl-12">
                                <select name="poliklinik">
                                    <option value="1">Poliklinik</option>
                                    <option value="2">Poli Umum</option>
                                    <option value="3">Poli Gigi & Mulut</option>
                                    <option value="4">Poli KIA</option>
                                    <option value="5">Poli Lansia</option>
                                    <option value="6">Poli Paru</option>
                                    <option value="7">Poli Psikolog</option>
                                    <option value="8">Poli Gizi</option>
                                </select>

                                <input type="date" placeholder="Select date" name="tanggal" />
                            </div>

                            <h5 style="margin-bottom: 20px; margin-top: 20px; margin-left: 210px; color: #1669AD;">Masukkan NIK anda.</h5>

                            <div class="col-xl-12">
                                <input type="text" placeholder="NIK" name="nik" />
                                <i class="far fa-user"></i>
                                @if(session('success'))
                                <div class="alert alert-success" style="margin-top: 30px">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if(session('error'))
                                <div class="alert alert-danger" style="margin-top: 30px">
                                  {{ session('error') }}
                                </div>
                                @endif
                            </div>

                            <button type="submit" class="btn" style="padding: 24px 305px; margin-left: -60px; margin-bottom: 0px; margin-top: 40px; border-radius: 0 0 15px 15px;">DAFTAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




      <!-- calculate-area end -->
      
    </main>

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
