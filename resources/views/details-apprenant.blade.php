@section('title','Liste Apprenants') 
  <nav class="nav-menu d-none d-lg-block">
    <ul>
        @section('menu')
          <li><a href="{{url('/')}}">Accueil</a></li>
          <li><a href="{{url('apropos')}}">Qui sommes-nous</a></li>
          <li class="active"><a href="{{url('apprenants')}}">Apprenants</a></li>
          <li><a href="{{url('evenements')}}">Evénements</a></li>          
          <li><a href="{{url('alumnis')}}">Alumnis</a></li>
          <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        @endsection
    </ul>
  </nav>
@endsection
<body>   
    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex">
  
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html">Flattern</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="active"><a href="portfolio.html">Portfolio</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
  
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->
  
    <main id="main">
  
      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio Details</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Portfolio Details</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <h2 class="portfolio-title">This is an example of portfolio detail</h2>
          <div class="row">
  
            <div class="col-lg-8" data-aos="fade-right">
              <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-4 portfolio-info" data-aos="fade-left">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
  
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  
    </main><!-- End #main -->