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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('contacto');
            $table->date('Data_requesicao');
            $table->string('local_partida');
            $table->string('destino_partida');
            $table->string('passageiros');
            $table->date('Data_estimativa_entrega');
            $table->timeTz('horas_partida_viatura', $precision = 0);
            $table->timeTz('horas_entrega_viatura', $precision = 0);
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
