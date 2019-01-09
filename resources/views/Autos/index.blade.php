@extends('Layouts.base')

@section('content')
<h3>Gestion de Vehiculos</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col"><a href="{{ route('autos.create') }}" class="btn btn-primary">Agregar Auto</a></div>
    </div>
</div>
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Color</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($autos as $auto)
            <tr>
                <th scope="row">{{ $auto->id }}</th>
                <td>{{ $auto->Marca}}</td>
                <td>{{ $auto->Modelo}}</td>
                <td>{{ $auto->Color}}</td>
            <td><a href="{{ route('autos.edit', $auto->id) }}">Modificar</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection