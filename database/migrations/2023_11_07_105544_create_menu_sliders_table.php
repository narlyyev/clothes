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
        Schema::create('menu_sliders', function (Blueprint $table) {
            $table->foreignId('menu_id')->constrained('menus');
            $table->foreignId('slider_id')->constrained('sliders');
            $table->primary(['menu_id', 'slider_id']);
            $table->unsignedInteger('sort_order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_sliders');
    }
};
