@extends('template')

@section('title', 'Evenements')

@section('menu')
<li><a href="{{url('/')}}">Accueil</a></li>
<li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
<li><a href="{{url('apprenants')}}">Apprenants</a></li>
<li><a href="{{url('evenements')}}">Evenements</a></li>
<li><a href="{{url('alumnis')}}">Alumnis</a></li>
<li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
<li class="active"><a href="{{url('contact')}}">Contact</a></li>
@endsection

@section('contenu')
<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Contactez-nous</h2>
              <ol>
                <li><a href="index.html">Accueil</a></li>
                <li>Contact</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Contact Section ======= -->
        <div class="map-section">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0959791143123!2d-1.5026646857007788!3d12.376502831006094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1591573149728!5m2!1sfr!2sbf" frameborder="0" allowfullscreen></iframe>
        </div>
    
        <section id="contact" class="contact">
          <div class="container">
    
            <div class="row justify-content-center" data-aos="fade-up">
    
              <div class="col-lg-10">
    
                <div class="info-wrap">
                  <div class="row">
                    <div class="col-lg-4 info">
                      <i class="icofont-google-map"></i>
                      <h4>Addresse:</h4>
                      <p>Université de ouagadougou, rue...<br>Agence Universitaire de la Francophonie
                        Burkina Faso</p>
                    </div>
    
                    <div class="col-lg-4 info mt-4 mt-lg-0">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>dbagre.ext@simplon.co<br>contact@example.com</p>
                    </div>
    
                    <div class="col-lg-4 info mt-4 mt-lg-0">
                      <i class="icofont-phone"></i>
                      <h4>Téléphone:</h4>
                      <p>+226 70 00 00 00<br>+226 25 00 00 00</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
            </div>   

          </div>
        </section><!-- End Contact Section -->
    
      </main><!-- End #main -->
@endsection
  