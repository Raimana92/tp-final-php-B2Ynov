@extends('layouts.home')

@section('titre')
ListeModule
@endsection

@section('contenu')
<h1>Liste des Modules</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td>{{ $promo-> id }}</td>
      <td>{{ $promo-> Nom }}</td>
      <td>{{ $promo-> Description }}</td>
      <td></td>
    </tr>
    
  </tbody>
</table>
@endsection