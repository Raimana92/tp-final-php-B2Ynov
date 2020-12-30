@extends('layouts.home')

@section('titre')
edition
@endsection

@section('contenu')
<h1>Edition</h1>
<form method="POST" action="{{ route ('modules.update', $module)}}">
@method('PUT')
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input name="Nom" value={{ $module -> Nom}} type="text" class="form-control" id="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="Description">Description</label>
      <input name="Description" value={{ $module -> Description}} type="text" class="form-control" id="Description" placeholder="Description">
    </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
@endsection