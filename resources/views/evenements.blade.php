@extends('template')

@section('title', 'Evenements')

@section('menu')
  <li><a href="{{url('/')}}">Accueil</a></li>
  <li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
  <li><a href="{{url('apprenants')}}">Apprenants</a></li>
  <li class="active"><a href="{{url('evenements')}}">Evenements</a></li>
  <li><a href="{{url('alumnis')}}">Alumnis</a></li>
  <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
@endsection

@section('contenu')
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Les evenements</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Evenements</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
            <div class="container" data-aos="fade-up">
            
              <div class="row">
                  @foreach($evenements as $evenement)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="{{$evenement->affiche}}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><a href="">{{$evenement->titreEvenement}}</a></h5>
                      <p class="font-italic text-center">Du {{$evenement->dateDebut}} au {{$evenement->dateFin}} à {{$evenement->lieu}}</p>
                      <p class="card-text">{{$evenement->descriptionEvenement}}<br><br>Organisé par<strong> {{$evenement->organisateur}} </strong></p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            
            </div>
          </section><!-- End Events Section -->

  </main><!-- End #main -->
@endsection
  