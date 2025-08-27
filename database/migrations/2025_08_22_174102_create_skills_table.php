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
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('category'); // Bahasa Pemrograman, Framework, Database, Tools
        $table->string('name');     // Nama skill
        $table->string('icon')->nullable(); // Icon font-awesome
        $table->integer('level');   // Persentase skill
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
