<!-- resources/views/servicios/edit.blade.php -->
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/estiloFormularios.css">
<div class="centrar">
    <h1>Editar vehículo</h1>

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="cliente_id">Propietario:</label>
                <select name="cliente_id" class="form-control inputs" required>
                    @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" class="form-control inputs" required>
        </div>

        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" name="color" class="form-control inputs" required>
        </div>

        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" class="form-control inputs" required>
        </div>

        <div class="form-group">
            <label for="placa">placa:</label>
            <input type="text" name="placa" class="form-control inputs" required>
        </div>
    
        <!-- Botón para enviar el formulario -->
        <button style="margin-top: 20px;" type="submit" class="btn btn-primary boton">Actualizar Vehículo</button>
    </form>
</div>
@endsection
