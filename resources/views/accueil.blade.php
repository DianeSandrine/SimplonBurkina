@extends('template')
@section('title','Accueil') 
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @section('menu')
                    <li class="active" ><a href="{{url('/')}}">Accueil</a></li>
                    <li><a href="{{url('appropos')}}">Qui sommes-nous</a></li>
                    <li><a href="{{url('apprenants')}}">Apprenants</a></li>
                    <li><a href="{{url('evenements')}}">Evénements</a></li>          
                    <li><a href="{{url('alumnis')}}">Alumnis</a></li>
                    <li><a href="{{url('enregistrer')}}">Enregistrer</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                @endsection
            </ul>
        </nav>
@section('contenu')
    <h1> simplon burkina</h1>
@endsection
