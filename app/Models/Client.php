<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['idcompte','ville','email','cni'];

    public function compte()
    {
        return $this->belongsTo('App\Models\Compte');
    }
}
