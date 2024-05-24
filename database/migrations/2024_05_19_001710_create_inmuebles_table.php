<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * correr migraciones
     */
    public function up(): void
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->text('descripcion');           
            $table->integer('precio');
            $table->integer('stock');
            $table->text('imagen');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('lugar');
            $table->string('estrato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
