@extends('layouts.home')

@section('titre')
List
@endsection

@section('contenu')
<h1>Eleves</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th colspan="2" align="center" scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($contacts as $contact)
  <tbody>
    <tr>
      <td>{{ $contact-> Nom }}</td>
      <td>{{ $contact-> Prenom }}</td>
      <td>{{ $contact-> Email }}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('eleves.edit', $eleve)}}">Edition</a>
      </td>
      <td>
        <form action="{{ route('eleves.destroy', $eleve)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection