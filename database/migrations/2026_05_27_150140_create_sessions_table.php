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
        Schema::create('sessions', function (Blueprint $table) {

            // Session ID
            $table->string('id')->primary();

            // Logged in user ID
            $table->foreignId('user_id')->nullable()->index();

            // User IP
            $table->string('ip_address', 45)->nullable();

            // Browser/User Agent
            $table->text('user_agent')->nullable();

            // Session Data
            $table->longText('payload');

            // Last activity timestamp
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};