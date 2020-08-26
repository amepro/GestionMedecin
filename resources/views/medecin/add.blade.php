@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">formulaire d'enregistrement des medecins</div>
                    <div class="card-body">
                        @if(isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">Medecin Ajouter</div>
                             @else
                                <div class="alert alert-danger">Medecin non ajouter</div>
                            @endif
                        @endif
                        <form method="POST" action="{{route('persistmedecin')}}">
                            @csrf
                            <div class="form-group">
                               <label class="control-label" for="nom">Nom du medecin</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="prenom">Prenom du medecin</label>
                                <input class="form-control" type="text" name="prenom" id="prenom">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="telephone">Telephone du medecin</label>
                                <input class="form-control" type="text" name="telephone" id="telephone">
                            </div>
                            <div class="form-group">

                                <input class="btn btn-success"  type="submit" name="envoyer" id="envoyer" value="Envoyer">
                                <input  class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
