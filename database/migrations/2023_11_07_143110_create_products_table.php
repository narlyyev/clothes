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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merchant_id')->constrained('merchants');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('gender_id')->nullable()->constrained('genders');
            $table->foreignId('color_id')->nullable()->constrained('attribute_values');
            $table->foreignId('discount_menu_id')->nullable()->constrained('menus');
            $table->foreignId('popular_menu_id')->nullable()->constrained('menus');
            $table->foreignId('favorite_menu_id')->nullable()->constrained('menus');
            $table->string('product_code')->index();
            $table->string('group_code')->index();
            $table->string('name');
            $table->string('name_ru')->nullable();
            $table->text('description');
            $table->text('description_ru')->nullable();
            $table->json('images')->nullable();
            $table->unsignedFloat('discount_percent')->default(0);
            $table->dateTime('discount_start')->useCurrent();
            $table->dateTime('discount_end')->useCurrent();
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedFloat('average_rating')->default(0);
            $table->unsignedFloat('ratings_count')->default(0);
            $table->unsignedFloat('favorites_count')->default(0);
            $table->unsignedInteger('random')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
