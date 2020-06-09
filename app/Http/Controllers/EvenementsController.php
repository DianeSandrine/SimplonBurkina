<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

class EvenementsController extends Controller
{
    function store(Request $request)
    {
        $evenement=new Evenement();
        $evenement->titreEvenement=$request->titreEvenement;
        $evenement->descriptionEvenement=$request->descriptionEvenement;
        $evenement->dateDebut=$request->dateDebut;
        $evenement->dateFin=$request->dateFin;
        $evenement->lieu=$request->lieu;
        $evenement->organisateur=$request->organisateur;
        $evenement->affiche=$request->affiche->store('photos','public');
        $evenement->save();
        return redirect('enregistrer');
    }

    function listEvenements()
    {
        $evenement=Evenement::all();
        return view('evenements',['evenements'=>$evenement]);
    }
}
