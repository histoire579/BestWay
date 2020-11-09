<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable=['numero','nom','datenais','telephone','sexe','localisation','profession','login','password','etat','idtype'];
    public function typesCompe()
    {
        return $this->belongsTo('App\Models\TypeCompe');
    }

    public function administrateurs()
    {
        return $this->hasMany('App\Models\Administrateur');
    }

    public function employes()
    {
        return $this->hasMany('App\Models\Employe');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }
}
