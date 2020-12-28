@extends('layouts.home')

@section('titre')
Create
@endsection

@section('contenu')
<h1>Créer une Eleve</h1>
<form method="post" action="{{ route('eleves.store') }}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" type="text" class="form-control" id="Nom" placeholder="Nom de l'Eleve">
    </div>
    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input name="Prenom" type="text" class="form-control" id="Prenom" placeholder="Prénom de l'Eleve">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input name="Email" type="text" class="form-control" id="Email" placeholder="Email">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection