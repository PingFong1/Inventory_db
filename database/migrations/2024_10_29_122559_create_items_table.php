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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Define 'name' as a string column
            $table->text('description')->nullable(); // Define 'description' as a text column, allowing NULL values
            $table->integer('quantity'); // Define 'quantity' as an integer column
            $table->enum('status', ['available', 'unavailable'])->default('available'); // Define 'status' as an enum column with default value
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
