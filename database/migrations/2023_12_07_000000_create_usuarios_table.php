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
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombre', 55);
            $table->string('direccion', 255)->nullable();
            $table->string('numero_celular', 20)->nullable(); // Asumiendo que el número de teléfono tiene un máximo de 15 dígitos
            $table->string('contrasenha', 255)->bcrypt()->nullable(); 
            $table->enum('role', ['user', 'admin'])->default('user'); // Agrega una columna para el rol de usuario
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
