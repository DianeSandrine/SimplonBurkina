<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simplonien extends Model
{
    protected $table = 'simploniens';

    protected $fillable=['idStatut'];
  
    public function statut()
    {
        return $this->belongsTo('App\Statut');
    }

    public function projet()
    {
        return $this->belongsToMany('App\Projet');
    }
}
