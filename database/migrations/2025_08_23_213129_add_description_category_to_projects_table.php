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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category')->nullable()->after('name');
            $table->text('description')->nullable()->after('category');
            $table->string('demo_link')->nullable()->after('description');
            $table->string('source_link')->nullable()->after('demo_link');
            $table->string('technologies')->nullable()->after('source_link');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['category', 'description', 'demo_link', 'source_link', 'technologies']);
        });
    }
};
