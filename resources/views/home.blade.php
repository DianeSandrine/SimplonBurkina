@extends('template')

@section('title', 'Accueil')

@section('menu')
  <li class="active"><a href="{{url('/')}}">Accueil</a></li>
  <li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
  <li><a href="{{url('apprenants')}}">Apprenants</a></li>
  <li><a href="{{url('evenements')}}">Evenements</a></li>
  <li><a href="{{url('alumnis')}}">Alumnis</a></li>
  <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
@endsection

@section('contenu')

  <!-- ======= Hero Section ======= -->  
  <section id="hero">
      
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                      
          <div class="carousel-inner" role="listbox">
              @foreach($actualites as $actualite)                   
            <div class="carousel-item active" style="background-image: url({{asset('assets/img/actualite.jpg')}});">
              
              <div class="carousel-container">
                   
                <div class="carousel-content animated fadeInUp">
                    
                  <h2>{{$actualite->titreActualite}}</h2>
                  <p>{{$actualite->contenu}}</p>
                  <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                  
                </div>
                
              </div>
              
            </div>
             @endforeach   
          </div>
          
          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
    
          <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          
        </div>
        
      </section><!-- End Hero -->
      
      <main id="main">
    
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container">
    
            <div class="row">
              <div class="col-lg-9 text-center text-lg-left">
                <h3>Simplon Burkina a formé plus de {{$simploniens}} <span>simploniens</span> déjà!</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="{{url('apropos')}}">En savoir plus sur Simplon...</a>
              </div>
            </div>
    
          </div>
        </section><!-- End Cta Section -->
    
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Découvrez nos <strong>offres de formation</strong></h2>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up">
                  <div class="icon"><i class="icofont-computer"></i></div>
                  <h4 class="title"><a href="">Design web</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                  <h4 class="title"><a href="">Bases de données: Conception, administration</a></h4>
                  <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon"><i class="icofont-earth"></i></div>
                  <h4 class="title"><a href="">Developpement web</a></h4>
                  <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon"><i class="icofont-image"></i></div>
                  <h4 class="title"><a href="">Designer UI</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon"><i class="icofont-settings"></i></div>
                  <h4 class="title"><a href="">
                        Developpement d'applications mobiles</a></h4>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon"><i class="icofont-tasks-alt"></i></div>
                  <h4 class="title"><a href="">Design graphique</a></h4>
                  <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Services Section -->    
           
        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="section-bg clients">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Nos <strong>Partenaires</strong></h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/logoauf.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/img18.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/logofs.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/logorf.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/logouo.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/img13.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/logocneuf.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="assets/img/anptic.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Our Clients Section -->
    
      </main><!-- End #main -->
@endsection
  