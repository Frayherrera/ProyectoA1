<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Inventario;
use App\Models\Servicio;
use App\Models\ServicioVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Obtener el total de clientes, vehículos y servicios
        $totalClientes = Cliente::count();
        $totalVehiculos = Vehiculo::count();
        $totalServicios = ServicioVehiculo::count();
        $totalinventarios = Inventario::count();


        // Pasar los datos a la vista
        return view('home', compact('totalClientes', 'totalVehiculos', 'totalServicios', 'totalinventarios'));
    }
}
