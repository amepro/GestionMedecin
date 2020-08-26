@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">formulaire d'enregistrement des rendez-vous</div>
                    <div class="card-body">
                        @if(isset($confirmation))
                            @if($confirmation == 1)
                                <div class="alert alert-success">RV Ajouter</div>
                            @else
                                <div class="alert alert-danger">RV non ajouter</div>
                            @endif
                        @endif
                        <form method="POST" action="{{route('persistrendezvous')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="libelle">Libelle du RV</label>
                                <input class="form-control" type="text" name="libelle" id="libelle">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Date du RV</label>
                                <input class="form-control" type="date" name="date" id="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="medecins_id">Choisissez un medecin</label>
                                <select class="form-control"  name="medecins_id" id="medecins_id">
                                    <option value="0">Faites un choix</option>
                                    @foreach($medecins as $medecin)
                                        <option value="{{$medecin->id}}">{{$medecin->prenom}} {{$medecin->nom}}</option>
                                    @endforeach
                                </select>
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
