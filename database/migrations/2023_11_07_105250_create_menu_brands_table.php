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
        Schema::create('menu_brands', function (Blueprint $table) {
            $table->foreignId('menu_id')->constrained('menus');
            $table->foreignId('brand_id')->constrained('brands');
            $table->primary(['menu_id', 'brand_id']);
            $table->unsignedInteger('sort_order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_brands');
    }
};
