@extends('template')

@section('title', 'Alumnis')

@section('menu')
  <li><a href="{{url('/')}}">Accueil</a></li>
  <li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
  <li><a href="{{url('apprenants')}}">Apprenants</a></li>
  <li><a href="{{url('evenements')}}">Evenements</a></li>
  <li class="active"><a href="{{url('alumnis')}}">Alumnis</a></li>
  <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
@endsection

@section('contenu')
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Le réseau des Alumnis</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Alumnis</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach($alumnis as $alumni)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{$alumni->portrait}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$alumni->prenom}} {{$alumni->nom}}</h4>
                <span>{{$alumni->fonction}} à {{$alumni->entreprise}}</span>
                <span>{{$alumni->telephone}} / {{$alumni->email}}</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
        {{ $alumnis->links() }}
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection
  