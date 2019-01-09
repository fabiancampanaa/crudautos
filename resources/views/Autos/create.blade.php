@extends('Layouts.base')

@section('content')
<hr>
<div class="containner">
    <h3 class="text-center">Ingreso de Vehiculos</h3>
</div>
    <div class="container">
        <form action="{{ route('autos.store') }}" method="POST">
                @csrf
                <div class="row">
                        <div class="col-md-12">
                            <strong>Modelo:</strong>
                            <input type="text" name="Modelo" class="form-control" placeholder="Modelo de Vehiculo">
                        </div>
                        <div class="col-md-12">
                            <strong>Marca:</strong>
                            <input type="text" name="Marca" class="form-control" placeholder="Marca Vehiculo">
                        </div>
                        <div class="col-md-12">
                            <strong>Color</strong>
                            <input type="text" name="Color" class="form-control" placeholder="Color Vehiculo">
                        </div>
                        <div class="col-md-12 text-center">
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                </div>
        </form>
    </div>
@endsection