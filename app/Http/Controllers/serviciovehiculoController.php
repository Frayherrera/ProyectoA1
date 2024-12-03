<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\ServicioVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;


class serviciovehiculoController extends Controller
{
    public function index(){

        $servicios = ServicioVehiculo::with(['vehiculo', 'servicio'])->paginate(5);
        return view('serviciosVehiculos.index', compact('servicios'));

    }
    public function create(){
        $vehiculos = Vehiculo::all();
        $servicios = Servicio::all();

        return view('serviciosVehiculos.create', compact('vehiculos','servicios'));
    }
    public function store(Request $request ){

        $validated = $request->validate([
            'vehiculo_id' => 'required|exists:vehiculos,id', // Validar que el vehiculo_id exista
            'servicio_id' => 'required|exists:servicios,id', // Validar que el servicio_id exista
            'estado' => 'nullable|string',    
        ]);
    
        ServicioVehiculo::create($validated);
    
        return redirect()->route('serviciosVehiculos.index')->with('success', 'Servicio asignado correctamente.');
    }
    
    public function destroy( $id){
        $servicioVehiculo = ServicioVehiculo::find($id);
    
    if ($servicioVehiculo) {
        $servicioVehiculo->delete();
        return redirect()->route('serviciosVehiculos.index')->with('success', 'Servicio eliminado con éxito');
    }

    return redirect()->route('serviciosVehiculos.index')->with('error', 'Servicio no encontrado');
    }

}
