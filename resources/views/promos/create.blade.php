@extends('layouts.home')

@section('titre')
Create
@endsection

@section('contenu')
<h1>Créer une Promo</h1>
<form method="post" action="{{ route('promos.store') }}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" type="text" class="form-control" id="Nom" placeholder="Nom de la Promo">
    </div>
    <div class="form-group col-md-6">
      <label for="Spécialité">Spécialité</label>
      <input name="Spécialité" type="text" class="form-control" id="Spécialité" placeholder="Spécialité">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection