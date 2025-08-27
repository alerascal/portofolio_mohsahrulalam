<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client')->nullable();

            // Status: active, completed, pending, on-hold
            $table->enum('status', ['active', 'completed', 'pending', 'on-hold'])->default('active');

            // Priority: low, medium, high
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium');

            $table->date('deadline')->nullable();
            $table->unsignedTinyInteger('progress')->default(0); // 0-100

            // Gambar/cover proyek
            $table->string('cover_image')->nullable();

            $table->timestamps();

            // Index untuk pencarian cepat
            $table->index(['status', 'priority']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
