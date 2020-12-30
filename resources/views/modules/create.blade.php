@extends('layouts.home')

@section('titre')
Create
@endsection

@section('contenu')
<h1>Créer une Module</h1>
<form method="post" action="{{ route('modules.store') }}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" type="text" class="form-control" id="Nom" placeholder="Nom de la Module">
    </div>
    <div class="form-group col-md-6">
      <label for="Description">Description</label>
      <input name="Description" type="text" class="form-control" id="Description" placeholder="Description">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection