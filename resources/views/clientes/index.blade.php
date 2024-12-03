@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<h1 style="color: black;">Lista de Clientes</h1>
@if(session('success'))
<script>
    swal("Buen trabajo!", "{{ session('success') }}", "success");
</script>
@endif

<a style="margin: 20px; margin-left: 0px;" href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Cliente</a>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>

        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td><a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info"><i class='bx bx-search-alt-2'></i></a>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                <form action="{{route('clientes.destroy', $cliente)}}" method="POST" class="d-inline">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination justify-content-center">
    {{ $clientes->links('pagination::bootstrap-4') }}
</div>

@endsection