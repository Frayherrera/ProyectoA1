@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/estiloFormularios.css">

<div class="centrar">
    <h1>Agregar un nuevo vehículo</h1>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <!-- Campos del formulario -->
            <div class="form-group">
                <label for="cliente_id">Cliente:</label>
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
        <div class="form-group">
            <label for="fechaingreso">Fecha de registro:</label>
            <input style="width: 350px;" type="date" name="fecha_ingreso" class="form-control inputs" required>
        </div>
        <!-- Botón para enviar el formulario -->
        <button style="margin-top: 20px;" type="submit" class="btn btn-primary boton">Guardar Vehículo</button>
    </form>
</div>

@endsection