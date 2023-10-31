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
        Schema::create('st__class__details', function (Blueprint $table) {
            $table->id();
            $table->string('a_level_year')->nullable();
            $table->string('subjects')->nullable();
            $table->string('class_type')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st__class__details');
    }
};
