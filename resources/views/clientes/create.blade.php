@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/estiloFormularios.css">



<div class="centrar">
    <h1>Agregar Cliente</h1>

 

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control inputs" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control inputs" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control inputs">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" class="form-control inputs">
        </div>
        <button type="submit" class="btn btn-primary boton">Guardar</button>
    </form>
</div>

</style>
@endsection