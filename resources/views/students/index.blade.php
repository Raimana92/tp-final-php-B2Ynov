@extends('layouts.home')

@section('titre')
ListeStudent
@endsection

@section('contenu')
<h1>Liste des Étudiants</h1>
<a href="{{ route('students.create') }}" class= "btn btn-primary">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th colspan="2" align="center" scope="col">Action</th>
    </tr>
  </thead> 
@foreach ($students as $student)
  <tbody>
    <tr>
      <td>{{ $student-> Nom }}</td>
      <td>{{ $student-> Prenom }}</td>
      <td>{{ $student-> Email }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('students.edit', $student)}}">Edition</a>
      </td>
      <td>
        <form action="{{ route('students.destroy', $student)}}" method="POST">
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