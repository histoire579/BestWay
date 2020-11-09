@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'un compte</div>

                <div class="card-body">
                    <form class="" action="{{route('compte.store')}}" method="post">
                      {{csrf_field()}}
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="numero">Numéro</label>
                            <input type="text" name="numero" id="numero" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom complet</label>
                            <input type="text" name="nom" id="nom" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="datenais">Date de naissance</label>
                            <input type="date" name="datenais" id="datenais" class="form-control" required>
                        </div>

                        <div class="btn-group btn-group-toggle" data-toggle="buttons form-group" >
                            <label class="btn btn-primary active">
                              <input type="radio" name="sexe" id="option1" autocomplete="off" value="Masculin" checked> Masculin
                            </label>
                            <label class="btn btn-secondary">
                              <input type="radio" name="sexe" id="option2" autocomplete="off" value="Féminin"> Féminin
                            </label>

                          </div>

                        {{-- <div class="form-group">
                            <label for="sexe">Téléphone</label>
                            <input type="radio" name="sexe" id="sexe"  value="Masculin" required style="margin-left: 15px; margin-right: 5px"><label>Masculin</label>
                            <input type="radio" name="sexe" id="sexe"  value="Féminin" required style="margin-left: 15px;margin-right: 5px"><label>Féminin</label>
                        </div> --}}

                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" name="telephone" id="telephone" class="form-control" required pattern="(6[5-9][0-9])(([0-9]{3}){2})">
                        </div>

                        <div class="form-group">
                            <label for="localisation">Localisation</label>
                            <input type="text" name="localisation" id="localisation" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="etat">Etat du compte</label>
                            <input type="text" name="etat" id="etat" value="Actif" disabled class="form-control">
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" id="profession" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" name="login" id="login" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="form-group" >
                            <label for="type">Type de compte</label>
                            <select name="idtype" id="type" class="form-control custom-select" required onchange="masque()">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->libelle}}</option>
                            @endforeach
                            </select>
                          </div>

                        <div id="admin" style="display: none">
                            <div class="form-group">
                                <label for="matricule">Matricule</label>
                                <input type="text" name="matricule" id="matricule" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="fonction">Fonction</label>
                                <input type="text" name="fonction" id="fonction" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="agence">Agence</label>
                                <input type="text" name="agence" id="agence" class="form-control" >
                            </div>

                        </div>

                        <div id="employe" style="display: none">
                            <div class="form-group">
                                <label for="matricules">Matricules</label>
                                <input type="text" name="matricules" id="matricules" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="fonctions">Fonction</label>
                                <input type="text" name="fonctions" id="fonctions" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="agences">Agence</label>
                                <input type="text" name="agences" id="agences" class="form-control">
                            </div>

                        </div>

                        <div id="client">
                            <div class="form-group">
                                <label for="ville">ville</label>
                                <input type="text" name="ville" id="ville" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="cni">CNI</label>
                                <input type="text" name="cni" id="cni" class="form-control">
                            </div>

                        </div>



                        {{-- <div class="form-group">
                            <label for="datenais">Date de naissance</label>
                            <input type="date" name="datenais" id="datenais" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="date" name="telephone" id="telephone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="localisation">Localisation</label>
                            <input type="date" name="localisation" id="localisation" class="form-control" required>
                        </div> --}}
                      </div>

                    </div>

                        <div class="form-group">

                              <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="auth-login.html" class="text-muted"><i class="fa fa-account-circle "></i> Avez-vous déjà un compte?</a>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
