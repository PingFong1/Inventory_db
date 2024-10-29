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
        Schema::create('dept_notif', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dept_id')->constrained(); // Foreign key referencing departments table
            $table->string('message'); // String column for the notification message
            $table->timestamp('read_at')->nullable(); // Nullable timestamp for when the notification was read
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_notif');
    }
};
