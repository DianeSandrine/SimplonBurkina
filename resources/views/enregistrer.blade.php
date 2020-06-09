@extends('template')

@section('title', 'enregistrer')

@section('menu')
  <li><a href="{{url('/')}}">Accueil</a></li>
  <li><a href="{{url('apropos')}}">Qui sommes nous</a></li>
  <li><a href="{{url('apprenants')}}">Apprenants</a></li>
  <li><a href="{{url('evenements')}}">Evenements</a></li>
  <li><a href="{{url('alumnis')}}">Alumnis</a></li>
  <li class="active"><a href="{{url('enregistrer')}}">Enregistrer</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
@endsection

    </div>
  </header><!-- End Header -->

@section('contenu')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Enregistrer</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Enregistrer</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
      <!-- Form validations -->
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enregistrer un simplonien
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="{{url('ajouter-simplonien')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Statut <span class="required">*</span></label>
                        <div class="col-lg-10">                          
                          <select class="form-control" id="cname" name="idStatut"  pattern="[^\s]" required>
                              <option selected></option>
                              <option value="1">Apprenant</option>
                              <option value="2">Alumni</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Téléphone <span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control" id="cname" name="telephone" minlength="5" type="tel" required />
                        </div>
                      </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nom <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="nom" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Prenom <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="prenom" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Genre <span class="required">*</span></label>
                        <div class="col-lg-10">                          
                          <select class="form-control" id="cname" name="genre"  pattern="[^\s]" required>
                              <option selected></option>
                              <option value="masculin">Masculin</option>
                              <option value="feminin">Feminin</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="email" minlength="5" type="email" required />
                      </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Fonction </label>
                        <div class="col-lg-10">
                          <input class="form-control" id="cname" name="fonction" minlength="5" type="text"/>
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Entreprise </label>
                        <div class="col-lg-10">
                          <input class="form-control" id="cname" name="entreprise" minlength="5" type="text"/>
                        </div>
                      </div>
                      <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Promotion </label>
                          <div class="col-lg-10">
                            <input class="form-control" id="cname" name="promotion" minlength="5" type="number"/>
                          </div>
                        </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Portrait</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="portrait" type="file"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <button class="btn btn-default" type="reset">Annuler</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
      </section>

      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enregistrer un evenement
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="{{url('ajouter-evenement')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nom <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="titreEvenement" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="descriptionEvenement" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Date de début <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="date" name="dateDebut" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Date de fin</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="date" name="dateFin" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Lieu <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="lieu" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Organisateur <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="organisateur" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Affiche</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="affiche" type="file"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <button class="btn btn-default" type="reset">Annuler</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Enregistrer une actualité
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" action="{{url('ajouter-actualite')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Titre <span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control" id="cname" name="titreActualite" minlength="5" type="text" required />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">Date <span class="required">*</span></label>
                        <div class="col-lg-10">
                          <input class="form-control " id="cemail" type="date" name="date" required />
                        </div>
                      </div>
                      <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Contenu <span class="required">*</span></label>
                          <div class="col-lg-10">
                            <input class="form-control" id="cname" name="contenu" minlength="5" type="text" required />
                          </div>
                        </div>
                      <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="subject" name="image" type="file"/>
                        </div>
                      </div>
  
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-primary" type="submit">Enregistrer</button>
                          <button class="btn btn-default" type="reset">Annuler</button>
                        </div>
                      </div>
                    </form>
                  </div>  
                </div>
              </section>
            </div>
          </div>
        </section>
    </main><!-- End #main -->
@endsection
  