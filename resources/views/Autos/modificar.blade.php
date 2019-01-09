@extends('Layouts.base')

@section('content')
<h1>Modificar Autos</h1>
<hr>
<h4>Vehiculo a Modificar</h4>
<div class="container">
        <form action="{{ route('autos.update', $auto->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-12">
                            <strong>Modelo:</strong>
                        <input type="text" name="Modelo" class="form-control" value="{{$auto->Modelo}}" placeholder="Modelo de Vehiculo">
                        </div>
                        <div class="col-md-12">
                            <strong>Marca:</strong>
                        <input type="text" name="Marca" class="form-control" value="{{$auto->Marca}}" placeholder="Marca Vehiculo">
                        </div>
                        <div class="col-md-12">
                            <strong>Color</strong>
                        <input type="text" name="Color" class="form-control" value="{{$auto->Color}}" placeholder="Color Vehiculo">
                        </div>
                        <div class="col-md-12 text-center">
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block">Modificar Auto</button>
                        </div>
                </div>
        </form>
    </div>



@endsection


