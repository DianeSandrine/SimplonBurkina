<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use App\Actualite;
use App\Simplonien;

class HomeController extends Controller
{
    function index(){
        $actualite=Actualite::all();
        $totalSimploniens = Simplonien::all()->count();

        return view('home',['actualites'=>$actualite, 'simploniens'=>$totalSimploniens]);
    }

}
