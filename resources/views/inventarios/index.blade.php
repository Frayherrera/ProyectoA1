@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestión de Inventario</h1>

        <!-- Formulario para agregar productos -->
        <div class="card mb-4">
            <div class="card-header">
                Agregar Producto
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('inventarios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre_producto" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                </form>
            </div>
        </div>

        <!-- Tabla para listar productos -->
        <div class="card">
            <div class="card-header">
                Lista de Productos
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventarios as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>${{ number_format($producto->precio, 2) }}</td>
                            <td>
                                <!-- Botón para editar -->
                                <a href="{{ route('inventarios.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <!-- Botón para eliminar -->
                                <form action="{{ route('inventarios.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay productos en el inventario.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="pagination justify-content-center">
                    {{ $inventarios->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection