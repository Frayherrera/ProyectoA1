@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="container">
    <h1>Servicios Asignados</h1>

    @if(session('success'))
    <script>
        swal("Buen trabajo!", "{{ session('success') }}", "success");
    </script>
    @endif

    <a style="margin-bottom: 20px;" href="{{route('servicios.index') }}" class="btn btn-info"><i class='bx bx-arrow-to-left'></i></a>
    <a style="margin-bottom: 20px;" href="{{ route('serviciosVehiculos.create') }}" class="btn btn-primary">Asignar Servicio</a>
 


    <table class="table">
        <thead>
            <tr>
                <th>N° Servicio</th>
                <th>Vehiculo-Placa</th>
                <th>Servicio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->vehiculo->marca." / ".$servicio->vehiculo->placa }}</td> <!-- Mostrar marca del vehículo -->
                <td>{{ $servicio->servicio->nombre}}</td> <!-- Mostrar nombre del servicio -->
                <td>{{ $servicio->estado }}</td>

                <td>
                    <a href="{{ route('serviciosVehiculos.edit', $servicio) }}" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                    <form action="{{ route('serviciosVehiculos.destroy', $servicio) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination justify-content-center">
    {{ $servicios->links('pagination::bootstrap-4') }}
</div>
</div>
<style>
    h1 {
        color: black;
        margin-bottom: 30px;
    }

    label {
        color: #184463;
    }

    .inputs {
        height: 40px;
        width: 350px;
    }

    .centrar {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .boton {
        margin-top: 10px;
        float: right;
    }
</style>
@endsection