@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/estiloFormularios.css">
<div class="centrar">
<h1>Agregar servicio</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control inputs" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Dessscripción:</label>
        <textarea name="descripcion" class="form-control inputs"></textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" class="form-control inputs" required step="0.01">
    </div>
    <!-- <div class="form-group">
        <label for="vehiculo_id">Vehículo:</label>
        <select name="vehiculo_id" class="form-control inputs" required>
            <option value="">Selecciona un vehículo</option>
            @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca }} - {{ $vehiculo->modelo }}</option>
            @endforeach
        </select>
    </div>   -->

    <button type="submit" class="btn btn-primary boton">Guardar</button>
</form></div>

@endsection
