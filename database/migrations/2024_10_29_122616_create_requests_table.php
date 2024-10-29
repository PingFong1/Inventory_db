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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id'); // Foreign key for the items table
            $table->unsignedBigInteger('user_id'); // Foreign key for the users table
            $table->integer('quantity_requested'); // Define 'quantity_requested' as an integer
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Define 'status' as an enum with default value
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        
            // Foreign key constraints (assuming items and users tables exist)
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('dept_users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
