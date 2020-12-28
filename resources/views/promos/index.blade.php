@extends('layouts.home')

@section('titre')
ListePromo
@endsection

@section('contenu')
<h1>Liste des Promos</h1>
<button class="btn btn-primary" href="{{ route('promos.create') }}">Create</button>
<table class="Promo">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Spécialité</th>
      <th colspan="2" align="center" scope="col">Action</th>
    </tr>
  </thead> 
@foreach ($promos as $promo)
  <tbody>
    <tr>
      <td>{{ $promo-> Nom }}</td>
      <td>{{ $promo-> Spécialité }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('promos.edit', $promo)}}">Edition</a>
      </td>
      <td>
        <form action="{{ route('promos.destroy', $promo)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection