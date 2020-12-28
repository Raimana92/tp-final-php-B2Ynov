@extends('layouts.home')

@section('titre')
edition
@endsection

@section('contenu')
<h1>Edition</h1>
<form method="POST" action="{{ route ('promos.update', $promo)}}">
@method('PUT')
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" value={{ $promo -> Nom}} type="text" class="form-control" id="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="Spécialité">Spécialité</label>
      <input name="Spécialité" value={{ $promo -> Spécialité}} type="text" class="form-control" id="Spécialité" placeholder="Spécialité">
    </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
@endsection