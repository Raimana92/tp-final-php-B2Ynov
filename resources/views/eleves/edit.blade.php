@extends('layouts.home')

@section('titre')
edition
@endsection

@section('contenu')
<h1>Edition</h1>
<form method="POST" action="{{ route ('eleves.update', $eleve)}}">
@method('PUT')
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" value={{ $eleve -> Nom}} type="text" class="form-control" id="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input name="Prenom" value={{ $eleve -> Prenom}} type="text" class="form-control" id="Prenom" placeholder="Prénom">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input name="Email" value={{ $eleve -> Email}} type="text" class="form-control" id="Email" placeholder="Email">
    </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
@endsection