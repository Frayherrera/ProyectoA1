<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;


use App\Models\Cliente;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index()
    {

        $vehiculos = Vehiculo::paginate(5);

        return view('vehiculos.index', compact('vehiculos'));
    }
    //mostar formulario para crear un nuevo vehiculo
    public function create()
    {
        $clientes = Cliente::all();
        return view('vehiculos.create', compact('clientes'));
    }


    //guardar nuevo vehiculo
    public function store(Request $request)
    {
        //dd($request->all());


        $validated = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'color' => 'nullable|string|max:255',
            'placa' => 'required|string|max:100',
            'fecha_ingreso' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id' // Valida que el cliente exista

        ]);

        Vehiculo::create($validated);

        return redirect()->route('vehiculos.index')->with('success', 'Vehiculo creado correctamente');
    }

    public function show($id)
    {
        // Encuentra el vehículo por su id
        $vehiculo = Vehiculo::findOrFail($id);

        // Retorna una vista con los datos del vehículo
        return view('vehiculos.show', compact('vehiculo'));
    }
    public function edit(Vehiculo $vehiculo)
    {
        $clientes = Cliente::all();
        return view('vehiculos.edit', compact('vehiculo', 'clientes'));
    }
    
    public function update(Request $request, Vehiculo $vehiculo)
    {

        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'color' => 'nullable|string|max:255',
            'placa' => 'required|string|max:100',
            
            'cliente_id' => 'required|exists:clientes,id' // Valida que el cliente exista

        ]);
        
        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')->with('success', 'Vehiculo actualizado correctamente.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

        return redirect()->route('vehiculos.index')->with('success', 'Vehiculo eliminado correctamente');
    }
}
