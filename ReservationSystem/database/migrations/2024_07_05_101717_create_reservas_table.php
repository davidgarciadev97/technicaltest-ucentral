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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('numIdenti');
            $table->string('userType');
            $table->string('typeLab');
            $table->string('area');
            $table->date('dateSolicitud');
            $table->datetime('dateInicio');
            $table->datetime('dateFin');
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};

// Esta es la migracion para la tabla de reservas
