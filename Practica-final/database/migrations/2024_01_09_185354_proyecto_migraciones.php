<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id ();
            $table->string('nick', 10);
            $table->string('email',25);
            $table->string('nombre',25);
            $table->string('apellidos',25);
            $table->string('dni',9);
            $table->date('fecha_nacimiento');
            $table->string('contraña',10);
            $table->string('rol',15);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
};
