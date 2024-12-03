<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Obtener el total de clientes, vehículos y servicios
        $totalClientes = Cliente::count();
        $totalVehiculos = Vehiculo::count();
        $totalServicios = Servicio::count();

        // Pasar los datos a la vista
        return view('home', compact('totalClientes', 'totalVehiculos', 'totalServicios'));
    }
}
