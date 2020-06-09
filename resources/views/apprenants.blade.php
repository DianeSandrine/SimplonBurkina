@extends('template')

@section('title', 'Apprenants')

@section('menu')
  <li><a href="{{url('/')}}">Accueil</a></li>
  <li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
  <li class="active"><a href="{{url('apprenants')}}">Apprenants</a></li>
  <li><a href="{{url('evenements')}}">Evenements</a></li>
  <li><a href="{{url('alumnis')}}">Alumnis</a></li>
  <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
@endsection

@section('contenu')
<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>La liste de nos apprenants</h2>
              <ol>
                <li><a href="index.html">Accueil</a></li>
                <li>Apprenants</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
   
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">
    
            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Tous les apprenants</li>
                  <li data-filter=".filter-card">Les femmes</li>
                  <li data-filter=".filter-web">Les hommes</li>
                </ul>
              </div>
            </div>
    
            <div class="row portfolio-container" data-aos="fade-up">
            {{-- @foreach($apprenants as $apprenant)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{$apprenant->portrait}}" class="img-fluid apprenant" alt="">
                <div class="portfolio-info">
                  <h4>{{$apprenant->prenom}} {{$apprenant->nom}}</h4>
                  <p>{{$apprenant->telephone}} / {{$apprenant->email}}</p>
                  <a href="{{$apprenant->portrait}}" data-gall="portfolioGallery" class="venobox preview-link" title="Tous les apprenants"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            @endforeach          --}}
              
             @foreach($apprenantsss as $apprenantes)
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{$apprenantes->portrait}}" class="img-fluid apprenant" alt="">
                <div class="portfolio-info">
                  <h4>{{$apprenantes->prenom}} {{$apprenantes->nom}}</h4>
                  <p>{{$apprenantes->telephone}} / {{$apprenantes->email}} / {{$apprenantes->genre}}</p>
                  <a href="{{$apprenantes->portrait}}" data-gall="portfolioGallery" class="venobox preview-link" title="les femmes"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              @endforeach

              @foreach($apprenantss as $apprenants)
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{$apprenants->portrait}}" class="img-fluid apprenant" alt="">
                <div class="portfolio-info">
                  <h4>{{$apprenants->prenom}} {{$apprenants->nom}}</h4>
                  <p>{{$apprenants->telephone}} / {{$apprenants->email}} / {{$apprenants->genre}}</p>
                  <a href="{{$apprenants->portrait}}" data-gall="portfolioGallery" class="venobox preview-link" title="Les hommes"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              @endforeach 
  
            </div>
    
          </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Our <strong>Skills</strong></h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row skills-content">
  
            <div class="col-lg-6" data-aos="fade-up">
  
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  
              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">WordPress/CMS <i class="val">1%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Our Skills Section -->
    
      </main><!-- End #main -->
@endsection
  