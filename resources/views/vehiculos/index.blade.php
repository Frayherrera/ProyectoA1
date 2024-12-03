@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<h1 style="color: black;">Lista de Vehiculos</h1>
@if(session('success'))
<script>
    swal("Buen trabajo!", "{{ session('success') }}", "success");
</script>
@endif

<a style="margin: 20px; margin-left: 0px;" href="{{ route('vehiculos.create') }}" class="btn btn-primary">Agregar Vehiculo</a>

<table class="table">
    <thead>
        <tr>
            <th>Propietario</th>
            <th>Marca</th>
            <th>Placa</th>
            <th>Color</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehiculos as $vehiculo)
        <tr>
            <td>{{ $vehiculo->cliente->nombre }}</td>
            <td>{{ $vehiculo->marca }}</td>
            <td>{{ $vehiculo->placa }}</td>
            <td>{{ $vehiculo->color }}</td>
            <td>
                <form action="{{route('vehiculos.destroy', $vehiculo)}}" method="POST" class="d-inline">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                </form>
                <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning"><i class='bx bx-edit'></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<div class="pagination justify-content-center">
    {{ $vehiculos->links('pagination::bootstrap-4') }}
</div>
@endsection