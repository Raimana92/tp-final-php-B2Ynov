@extends('layouts.home')

@section('titre')
ListePromo
@endsection

@section('contenu')
<h1>Liste des Promos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Spécialité</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td>{{ $promo-> id }}</td>
      <td>{{ $promo-> Nom }}</td>
      <td>{{ $promo-> Spécialité }}</td>
      <td></td>
    </tr>
    
  </tbody>
</table>
@endsection