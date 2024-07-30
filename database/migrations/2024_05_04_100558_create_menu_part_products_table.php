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
        Schema::create('menu_part_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_part_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('measure_cup_count')->nullable();
            $table->integer('measure_size_count')->nullable();
            $table->integer('calories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_part_products');
    }
};
