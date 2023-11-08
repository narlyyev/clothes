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
        Schema::create('menu_genders', function (Blueprint $table) {
            $table->foreignId('menu_id')->constrained('menus');
            $table->foreignId('gender_id')->constrained('genders');
            $table->primary(['menu_id', 'gender_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_genders');
    }
};
