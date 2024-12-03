@extends('layouts.app')

@section('content')

<h1 style="color: black;">Detalles del Cliente: {{ $cliente->nombre }}</h1>

<p style="color: black;"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
<p style="color: black;"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
<p style="color: black;"><strong>Email:</strong> {{ $cliente->email }}</p>

<h2 style="color: black;">Vehículos</h2>

<a style="margin: 20px; margin-left: 0 ;" href="{{ route('vehiculos.create', $cliente->id) }}" class="btn btn-primary">Agregar Vehículo</a>

<table class="table">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Fecha de Ingreso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cliente->vehiculos as $vehiculo)
        <tr>
            <td>{{ $vehiculo->marca }}</td>
            <td>{{ $vehiculo->modelo }}</td>
            <td>{{ $vehiculo->placa }}</td>
            <td>{{ $vehiculo->fecha_ingreso }}</td>
            <td>

                <form action="{{route('vehiculos.destroy', $vehiculo)}}" method="POST" class="d-inline">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection