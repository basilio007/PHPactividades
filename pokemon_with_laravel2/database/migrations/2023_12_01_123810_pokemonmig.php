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
    
        Schema::create('pkmdatos', function (Blueprint $table) {
        
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->enum('tamano', ['pequeño', 'mediano', 'grande']);
            $table->decimal('peso', 8, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('pkmdatos');
    }
};
