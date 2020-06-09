<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;

class SimploniensController extends Controller
{
    function index()
    {
        return view('enregistrer');
    }

    function listApprenants()
    {
        $apprenant=Simplonien::where('idStatut','=', "1")->get();
        $apprenants=Simplonien::where([['idStatut','=', "1"], ['genre','=', "masculin"], ])->get();
        $apprenantes=Simplonien::where([['idStatut','=', "1"], ['genre','=', "feminin"], ])->get();
        return view('apprenants',['apprenants'=>$apprenant, 'apprenantss'=>$apprenants, 'apprenantsss'=>$apprenantes]);
    }

    
    function listAlumnis()
    {
        $alumni=Simplonien::where('idStatut','=', "2")->paginate(6);
        return view('alumnis',['alumnis'=>$alumni]);
    }
    

    function store(Request $request)
    {
        $simplonien=new Simplonien();
        $simplonien->telephone=$request->telephone;
        $simplonien->nom=$request->nom;
        $simplonien->prenom=$request->prenom;
        $simplonien->genre=$request->genre;
        $simplonien->portrait=$request->portrait;
        $simplonien->email=$request->email;
        $simplonien->fonction=$request->fonction;
        $simplonien->entreprise=$request->entreprise;
        $simplonien->promotion=$request->promotion;
        $simplonien->idStatut=$request->idStatut;
        $simplonien->portrait=$request->portrait->store('photos','public');
        $simplonien->save();
        return redirect('enregistrer');
    }

    
}
