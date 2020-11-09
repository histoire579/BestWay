<?php

namespace App\Http\Controllers\Compte;

use App\Models\Compte;
use App\Http\Controllers\Controller;
use App\Models\Administrateur;
use App\Models\Client;
use App\Models\Employe;
use App\Models\TypeCompte;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c=TypeCompte::orderBy('created_at','asc')->get();
        return view('compte\comptes')->with('types',$c);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public static function lastId(Request $request)
    {

        $data=array(
            'numero'=>$request->numero,
            'nom'=> $request->nom,
            'datenais'=>$request->datenais,
            'telephone'=>$request->telephone,
            'sexe'=>$request->sexe,
            'localisation'=>$request->localisation,
            'profession'=>$request->profession,
            'login'=>$request->login,
            'password'=>$request->password,
            'etat'=>$request->etat,
            'idtype'=>$request->idtype,
            );

         $id=DB::table('comptes')
                ->insertGetId($data);
        return$id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compte=new Compte();
        // $compte->numero=$request->numero;
        // $compte->nom=$request->nom;
        // $compte->datenais=$request->datenais;
        // $compte->telephone=$request->telephone;
        // $compte->sexe=$request->sexe;
        // $compte->localisation=$request->localisation;
        // $compte->profession=$request->profession;
        // $compte->login=$request->login;
        // $compte->password=$request->password;
        // $compte->etat=$request->etat;
        // $compte->idtype=$request->idtype;
        // $compte->save();

        $data=array(
        'numero'=>$request->numero,
        'nom'=> $request->nom,
        'datenais'=>$request->datenais,
        'telephone'=>$request->telephone,
        'sexe'=>$request->sexe,
        'localisation'=>$request->localisation,
        'profession'=>$request->profession,
        'login'=>$request->login,
        'password'=>Hash::make($request['password']),
        'etat'=>'Actif',
        'idtype'=>$request->idtype,
        'created_at'=>today(),
        'updated_at'=>today()
        );

        // $id=CompteController:: lastId($request);
        // dd($id);
        $id=DB::table('comptes')
                ->insertGetId($data);

        if($request->idtype==3){
            $admin=new Administrateur();
            $admin->idcompte=$id;
            $admin->matricule=$request->matricule;
            $admin->fonction=$request->fonction;
            $admin->agence=$request->agence;
            $admin->save();
        }elseif($request->idtype==1){
            $client=new Client();
            $client->idcompte=$id;
            $client->ville=$request->ville;
            $client->email=$request->email;
            $client->cni=$request->cni;
            $client->save();
        }else{
            $employe=new Employe();
            $employe->idcompte=$id;
            $employe->matricule=$request->matricules;
            $employe->fonction=$request->fonctions;
            $employe->agence=$request->agences;
            $employe->save();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function show(Compte $compte)
    {
        //
    }

    public function connection(string $login,string $pass)
    {
        $pass=Hash::make($pass);
        return Compte:: where('login','=',$login,'and','password','=',$pass)->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function edit(Compte $compte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compte $compte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compte  $compte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compte $compte)
    {
        //
    }
}
