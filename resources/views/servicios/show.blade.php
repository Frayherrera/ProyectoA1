<!-- resources/views/servicios/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $servicio->nombre }}</h1>
    <p><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
    <p><strong>Precio:</strong> {{ $servicio->precio }}</p>
    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Regresar</a>
</div>
@endsection
