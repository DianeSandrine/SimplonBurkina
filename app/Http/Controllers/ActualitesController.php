<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualitesController extends Controller
{
    function store(Request $request)
    {
        $actualite=new Actualite();
        $actualite->titreActualite=$request->titreActualite;
        $actualite->date=$request->date;
        $actualite->contenu=$request->contenu;
        $actualite->image=$request->image->store('photos','public');
        $actualite->save();
        return redirect('enregistrer');
    }
}
