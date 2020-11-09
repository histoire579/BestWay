<?php

namespace App\Http\Controllers\Compte;

use App\Http\Controllers\Controller;
use App\Models\Compte;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('compte\login');
    }

    public function connection(Request $req)
    {
        $nom=$req->login;
        $pa=$req->login;
        $pass=Hash::make($pa);
        $compte= Compte:: where('login','=',$nom,'and','password','=',$pass)->get();

        if($compte!=null){
            return view('home');
        }

    }


}
