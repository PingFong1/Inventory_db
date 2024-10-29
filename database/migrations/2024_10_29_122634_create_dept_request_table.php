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
        Schema::create('dept_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained(); // Foreign key referencing requests table
            $table->foreignId('dept_id')->constrained(); // Foreign key referencing departments table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_request');
    }
};
