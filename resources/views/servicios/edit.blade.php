<!-- resources/views/servicios/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Servicio</h1>

    <form action="{{ route('vehiculos.update', $servicio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $servicio->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" class="form-control" value="{{ $servicio->precio }}" required step="0.01">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
