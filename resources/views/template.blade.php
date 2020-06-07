<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield ('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logosimplon.png')}}" rel="icon">
  {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->  
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:dbagre.ext@simplon.co">dbagre.ext@simplon.co</a>
        <i class="icofont-phone"></i> +226 25 00 00 00
      </div>

      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://web.facebook.com/Simplon.BF" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

      <div class="sidebar-item search-form">
        <form action="">
          <input type="text">
          <button type="submit"><i class="icofont-search"></i></button>
        </form>
      </div><!-- End sidebar search formn-->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="{{url('home')}}"><img src="{{asset('assets/img/logosimplon.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          @yield('menu')
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    @yield('contenu')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="{{url('home')}}"><img src="{{asset('assets/img/logosimplon.png')}}" alt="" class="img-fluide"></a>
            <p>
              Université de ouagadougou, Joseph Ki Zerbo, rue... <br>
              Ouagadougou, au sein de l'Agence Universitaire de la Francophonie<br>
              Burkina Faso <br><br>
              <strong>Téléphone:</strong> +226 25 00 00 00<br>
              <strong>Email:</strong> dbagre.ext@simplon.co<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>         
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('apropos')}}">Qui sommes-nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('apprenants')}}">Apprenants</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('evenements')}}">Evenements</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('alumnis')}}">Alumnis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('enregistrer')}}">Enregistrer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos offres de formation</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Developpement web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Developpement d'applications mobiles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Designer UI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design graphique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bases de données: Conception, administration</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Simplon en Afrique</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="https://simplon.co">Simplon mère</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://simplon.ci">Simplon Cote d'Ivoire</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://en.simplon.co/">Simplon Sénégal</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://maroc.simplon.co/">Simplon Maroc</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://tunisie.simplon.co/">Simplon Tunisie</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Simplon Gabon</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Simplon Congo</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Simplon Burkina</span></strong>. Tous droits réservés
        </div>
        <div class="credits">
          Designed by <a href="#">Groupe4</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://web.facebook.com/Simplon.BF" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->  
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>