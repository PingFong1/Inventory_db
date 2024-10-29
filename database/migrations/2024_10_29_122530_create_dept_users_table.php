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
        Schema::create('dept_users', function (Blueprint $table) {
            $table->id();
            $table->string('dept_name'); // Define 'dept_name' as a string column
            $table->string('user_name'); // Define 'user_name' as a string column
            $table->string('email')->unique(); // Define 'email' as a unique string column
            $table->string('password'); // Define 'password' as a string column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_users');
    }
};
