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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->float('price')->default(0.00);
            $table->enum('wifi', ['sim', 'não'])->default('sim');
            $table->enum('games', ['sim', 'não'])->default('não');
            $table->enum('movies', ['sim', 'não'])->default('não');
            $table->enum('best', ['sim', 'não'])->default('não');
            $table->enum('giga', ['sim', 'não'])->default('não');
            $table->float('speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
