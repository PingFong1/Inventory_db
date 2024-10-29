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
        Schema::create('admin_notif', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained(); // Foreign key referencing admins table
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
        Schema::dropIfExists('admin_notif');
    }
};
