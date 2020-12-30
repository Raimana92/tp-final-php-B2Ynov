@extends('layouts.home')

@section('titre')
ListeModule
@endsection

@section('contenu')
<h1>Liste des Modules</h1>
<a href="{{ route('modules.create') }} " class= "btn btn-primary">Create</a>
<table class="Module">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th colspan="2" align="center" scope="col">Action</th>
    </tr>
  </thead> 
@foreach ($modules as $module)
  <tbody>
    <tr>
      <td>{{ $module-> Nom }}</td>
      <td>{{ $module-> Description }}</td>
      <td>
        <a class="btn btn-info" href="{{ route('modules.edit', $module)}}">Edition</a>
      </td>
      <td>
        <form action="{{ route('modules.destroy', $module)}}" method="POST">
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