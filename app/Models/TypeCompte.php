<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCompte extends Model
{
    protected $fillable=['libelle'];
    public function comptes()
    {
        return $this->hasMany('APP\Models\Compte');
    }
}
