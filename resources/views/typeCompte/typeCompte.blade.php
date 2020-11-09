@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout un type de compte</div>

                <div class="card-body">
                    <form class="" action="{{route('typeCompte.store')}}" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" name="libelle" id="libelle" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <center>
                          <button type="submit" name="button" class="btn btn-primary btn-lg">Enregistrer</button>
                        </center>

                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
