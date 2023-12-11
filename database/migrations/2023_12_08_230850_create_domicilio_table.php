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
        Schema::create('domicilio', function (Blueprint $table) {
            $table->id();
            
            // 
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete("cascade");

            // 
            $table->unsignedBigInteger('id_carrito');
            $table->foreign('id_carrito')->references('id')->on('carritos')->onDelete("cascade");; // Relación con la tabla de usuarios
            
            //
            $table->string('nombre_usuario', 55);
            $table->string('direccion', 255)->nullable();
            $table->string('numero_celular', 20)->nullable();
            
            //
            $table->integer('cantidad_pedido');
            $table->string('producto_seleccionado');
            $table->integer('precio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilio');
    }
};
