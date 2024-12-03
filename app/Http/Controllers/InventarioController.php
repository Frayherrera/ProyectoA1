<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::paginate(6);
        return view('inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        return view('inventarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Producto agregado al inventario');
    }

    public function edit(Inventario $inventario)
    {
        return view('inventarios.edit', compact('inventario'));
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Producto actualizado');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();

        return redirect()->route('inventarios.index')->with('success', 'Producto eliminado del inventario');
    }
}
