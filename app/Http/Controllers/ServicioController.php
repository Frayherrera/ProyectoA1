<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::paginate(5);
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $vehiculos = Vehiculo::all();
        return view('servicios.create',   compact('vehiculos'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // Validar los campos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        // Crear el servicio, incluyendo vehiculo_id
        Servicio::create($validated);

        return redirect()->route('servicios.index')->with('success', 'Servicio creado correctamente.');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);


        $servicio->update($request->all());

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente.');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente.');
    }
}
