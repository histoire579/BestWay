<?php

namespace App\Http\Controllers\TypeCompte;

use App\Http\Controllers\Controller;
use App\Models\TypeCompte;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('typeCompte\typeCompte');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type= new TypeCompte();
        $type->libelle=$request->libelle;
        $type->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCompte $typeCompte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCompte $typeCompte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeCompte $typeCompte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeCompte  $typeCompte
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCompte $typeCompte)
    {
        //
    }
}
