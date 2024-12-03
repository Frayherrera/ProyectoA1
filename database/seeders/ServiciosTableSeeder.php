<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            ['nombre' => 'Cambio de Aceite', 'descripcion' => 'Cambio completo de aceite y filtro', 'precio' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de Frenos', 'descripcion' => 'Revisión y ajuste del sistema de frenos', 'precio' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Alineación y Balanceo', 'descripcion' => 'Servicio de alineación y balanceo de llantas', 'precio' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lavado de Motor', 'descripcion' => 'Lavado de motor con productos especializados', 'precio' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Batería', 'descripcion' => 'Sustitución de batería del vehículo', 'precio' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Diagnóstico Completo', 'descripcion' => 'Diagnóstico completo del sistema del vehículo', 'precio' => 80000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Mantenimiento de Suspensión', 'descripcion' => 'Revisión y reparación de la suspensión', 'precio' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Filtro de Aire', 'descripcion' => 'Sustitución del filtro de aire del motor', 'precio' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de Luces', 'descripcion' => 'Revisión y ajuste de luces delanteras y traseras', 'precio' => 20000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Pastillas de Freno', 'descripcion' => 'Sustitución de pastillas de freno', 'precio' => 90000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión del Sistema de Escape', 'descripcion' => 'Verificación y reparación del sistema de escape', 'precio' => 85000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Refrigerante de Motor', 'descripcion' => 'Reemplazo de refrigerante del sistema de motor', 'precio' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Correa de Distribución', 'descripcion' => 'Sustitución de la correa de distribución', 'precio' => 180000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión del Sistema Eléctrico', 'descripcion' => 'Verificación del sistema eléctrico del vehículo', 'precio' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ajuste de Embrague', 'descripcion' => 'Ajuste del sistema de embrague', 'precio' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Plumas de Limpiaparabrisas', 'descripcion' => 'Sustitución de plumas de limpiaparabrisas', 'precio' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Mantenimiento de Sistema de Aire Acondicionado', 'descripcion' => 'Revisión y carga de aire acondicionado', 'precio' => 65000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cambio de Neumáticos', 'descripcion' => 'Sustitución de los cuatro neumáticos', 'precio' => 240000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Revisión de Caja Automática', 'descripcion' => 'Verificación y ajuste de la caja automática', 'precio' => 160000, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lavado Completo del Vehículo', 'descripcion' => 'Lavado exterior e interior completo', 'precio' => 40000, 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('clientes')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan.perez@example.com', 'telefono' => '555-1234', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'María Gómez', 'email' => 'maria.gomez@example.com', 'telefono' => '555-5678', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Carlos Sánchez', 'email' => 'carlos.sanchez@example.com', 'telefono' => '555-8765', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ana Martínez', 'email' => 'ana.martinez@example.com', 'telefono' => '555-4321', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Pedro Rodríguez', 'email' => 'pedro.rodriguez@example.com', 'telefono' => '555-7890', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Luisa Fernández', 'email' => 'luisa.fernandez@example.com', 'telefono' => '555-3456', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'José Ramírez', 'email' => 'jose.ramirez@example.com', 'telefono' => '555-9012', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Laura Morales', 'email' => 'laura.morales@example.com', 'telefono' => '555-6543', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ricardo Gutiérrez', 'email' => 'ricardo.gutierrez@example.com', 'telefono' => '555-2109', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sofía Castillo', 'email' => 'sofia.castillo@example.com', 'telefono' => '555-5432', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('vehiculos')->insert([
            ['marca' => 'Toyota', 'modelo' => 'Corolla', 'color' => 'Blanco', 'placa' => 'ABC123', 'fecha_ingreso' => '2024-10-05', 'cliente_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Honda', 'modelo' => 'Civic', 'color' => 'Negro', 'placa' => 'DEF456', 'fecha_ingreso' => '2024-10-04', 'cliente_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Ford', 'modelo' => 'Focus', 'color' => 'Azul', 'placa' => 'GHI789', 'fecha_ingreso' => '2024-10-03', 'cliente_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Chevrolet', 'modelo' => 'Spark', 'color' => 'Rojo', 'placa' => 'JKL012', 'fecha_ingreso' => '2024-10-02', 'cliente_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Nissan', 'modelo' => 'Sentra', 'color' => 'Verde', 'placa' => 'MNO345', 'fecha_ingreso' => '2024-10-01', 'cliente_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Mazda', 'modelo' => '3', 'color' => 'Gris', 'placa' => 'PQR678', 'fecha_ingreso' => '2024-09-30', 'cliente_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Volkswagen', 'modelo' => 'Jetta', 'color' => 'Blanco', 'placa' => 'STU901', 'fecha_ingreso' => '2024-09-29', 'cliente_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Hyundai', 'modelo' => 'Elantra', 'color' => 'Azul', 'placa' => 'VWX234', 'fecha_ingreso' => '2024-09-28', 'cliente_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Kia', 'modelo' => 'Rio', 'color' => 'Negro', 'placa' => 'YZA567', 'fecha_ingreso' => '2024-09-27', 'cliente_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['marca' => 'Subaru', 'modelo' => 'Impreza', 'color' => 'Rojo', 'placa' => 'BCD890', 'fecha_ingreso' => '2024-09-26', 'cliente_id' => 10, 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('inventarios')->insert([
            ['nombre_producto' => 'Aceite para motor', 'descripcion' => 'Aceite sintético 5W-30 para autos modernos', 'cantidad' => 50, 'precio' => 30.99, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Filtro de aceite', 'descripcion' => 'Filtro compatible con varias marcas de vehículos', 'cantidad' => 100, 'precio' => 10.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Batería de auto', 'descripcion' => 'Batería de 12V con excelente duración y garantía', 'cantidad' => 25, 'precio' => 120.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Pastillas de freno', 'descripcion' => 'Juego de pastillas delanteras y traseras de alta calidad', 'cantidad' => 80, 'precio' => 45.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Llanta radial', 'descripcion' => 'Llanta radial de 16 pulgadas ideal para sedanes', 'cantidad' => 60, 'precio' => 80.99, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Anticongelante', 'descripcion' => 'Botella de 1 litro para protección extrema del motor', 'cantidad' => 40, 'precio' => 15.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Limpiaparabrisas', 'descripcion' => 'Juego de limpiadores universales de alta durabilidad', 'cantidad' => 90, 'precio' => 12.99, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Cables de batería', 'descripcion' => 'Juego de cables reforzados para encendido seguro', 'cantidad' => 35, 'precio' => 25.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Juego de herramientas', 'descripcion' => 'Maletín con herramientas básicas para reparaciones', 'cantidad' => 20, 'precio' => 75.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_producto' => 'Cubreasientos', 'descripcion' => 'Juego de cubreasientos resistentes al desgaste', 'cantidad' => 50, 'precio' => 35.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
