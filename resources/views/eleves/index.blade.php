@extends('layouts.home')

@section('titre')
ListeEleve
@endsection

@section('contenu')
<h1>Liste des Eleves</h1>
<a href={{ route('eleves.create') }} class= "btn btn-primary">Create</a>
<table class="Eleve">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th colspan="2" align="center" scope="col">Action</th>
    </tr>
  </thead> 
@foreach ($eleves as $eleve)
  <tbody>
    <tr>
      <td>{{ $eleve-> Nom }}</td>
      <td>{{ $eleve-> Prenom }}</td>
      <td>{{ $eleve-> Spécialité }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('eleves.edit', $eleve)}}">Edition</a>
      </td>
      <td>
        <form action="{{ route('eleves.destroy', $eleve)}}" method="POST">
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