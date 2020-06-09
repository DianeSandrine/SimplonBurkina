<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simplonien;

class AboutController extends Controller
{
    function index(){

        $totalSimploniens = Simplonien::all()->count();
        $totalApprenants = Simplonien::where('idStatut','=', "1")->count();

        return view('apropos',['simploniens'=>$totalSimploniens, 'apprenants'=>$totalApprenants]);
    }
}
