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
        Schema::create('enfermedades', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('prioridades_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('sintomas');
            $table->string('especialidad');
            $table->timestamps();
            $table->foreign('prioridades_id')->references('id')->on('prioridades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enfermedades');
    }
};
