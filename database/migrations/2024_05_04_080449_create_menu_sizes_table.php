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
        Schema::create('menu_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('calories');
            $table->integer('status')->default(1)->comment(' 0 - aktiv emas , 1 - aktiv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_sizes');
    }
};
