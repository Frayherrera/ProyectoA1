<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto', 255);
            $table->text('descripcion')->nullable();
            $table->integer('cantidad')->default(0);
            $table->decimal('precio', 10, 2)->default(0.00);
            $table->timestamps();

            // Foreign key con tabla categorías, si aplica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
