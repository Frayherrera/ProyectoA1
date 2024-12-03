@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/estiloFormularios.css">
<div class="centrar">
<h1>Asignar servicio</h1>

<form action="{{route('serviciosVehiculos.store')}}" method="POST">
    @csrf
    <div class="form-group">
            <label for="vehiculo_id">Vehiculo:</label>
            <select name="vehiculo_id" class="form-control inputs" required>
                @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca." ".$vehiculo->placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="servicio_id">Servicio:</label>
            <select name="servicio_id" class="form-control inputs" required>
                @foreach($servicios as $servicio)
                <option value="{{ $servicio->id }}">{{ $servicio->nombre}}</option>
                @endforeach
            </select>
        </div>




    <button type="submit" class="btn btn-primary boton">Guardar</button>
</form>
  </div>

@endsection
