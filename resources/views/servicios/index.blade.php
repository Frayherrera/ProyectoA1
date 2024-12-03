@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="container">
    <h1>Servicios</h1>
    
    @if(session('success'))
        <script>swal("Buen trabajo!", "{{ session('success') }}", "success");</script>
    @endif

    <a style="margin-bottom: 20px;" href="{{ route('servicios.create') }}" class="btn btn-primary">Crear Servicio</a>
    <a style="margin-bottom: 20px;" href="{{ route('serviciosVehiculos.create')}}" class="btn btn-success">Asignar Servicio</a>
    <a style="margin-bottom: 20px;" href="{{ route('serviciosVehiculos.index')}}" class="btn btn-info">Ver servicio asignados</a>

    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>{{ $servicio->precio }}</td>
                    <td>
                        <a href="{{ route('servicios.show', $servicio) }}" class="btn btn-info"><i class='bx bx-search-alt-2'></i></a>
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
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
    h1{
    color: black;
    margin-bottom: 30px;
}
label{
    color: #184463 ;
}
.inputs{
    height: 40px;
    width: 350px;
}
.centrar{
    display: flex;
    flex-direction: column ;
    align-items:  center;
    justify-content: center;
}
.boton{
    margin-top: 10px;
    float: right;
}
</style>
@endsection
