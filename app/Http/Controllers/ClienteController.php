<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Mostrar lista dee clientes
    public function index(){

        $clientes = Cliente::paginate(5);

        return view('clientes.index', compact('clientes'));

    }

    //mostrar formulario para crear clientes
    public function create(){

        return view('clientes.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255'
        ]);

        $cliente = Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
    }

    //mostrar un cliente y sus vehiculos

    public function show( Cliente $cliente){

        return view('clientes.show', compact('cliente'));
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect('/clientes')->with('success','Cliente eliminado con exito!!');
    }

}       
