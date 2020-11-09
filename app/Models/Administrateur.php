<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Compte
{
    protected $fillable=['idcompte','matricule','fonction','agence'];

    public function compte()
    {
        return $this->belongsTo('App\Models\Compte');
    }
}
