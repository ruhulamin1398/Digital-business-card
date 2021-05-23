<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Digital Business Card  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('abasas/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('abasas/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('abasas/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('abasas/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('abasas/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="{{route('index')}}">E-card</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('index')}}" class="logo mr-auto "><img src="{{asset('img/logo-black-croped.png')}}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('index')}}">Home</a></li>
          
          <li><a href="#services">Why us</a></li>
          <li><a href="{{route('login')}}">Premium</a></li>
          <li><a href="{{route('index')}}#pricing">Pricing</a></li>
          <li><a href="{{route('index')}}#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{route('login')}}" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

@yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Digital Business Card</h3>
              
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('login')}}">Premium</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
      
            </ul>
          </div>

          

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
      2021 &copy; Copyright <strong><span>Digital Card</span></strong>. All Rights Reserved
        
      </div>
      <!-- <div class="credits">
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('abasas/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('abasas/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('abasas/assets/js/main.js')}}"></script>

</body>

</html>