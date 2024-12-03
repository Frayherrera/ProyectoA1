<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');//relacion con el cliente
            $table->string('marca');
            $table->string('color')->nullable();
            $table->string('placa');
            $table->string('modelo');
            $table->date('fecha_ingreso');
            $table->timestamps();

            //definimos la llave foranea
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
