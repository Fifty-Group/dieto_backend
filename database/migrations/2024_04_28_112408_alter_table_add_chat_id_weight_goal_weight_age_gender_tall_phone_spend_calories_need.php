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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('chat_id')->nullable();
            $table->float('weight')->nullable();
            $table->float('goal_weight')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('tall')->nullable();
            $table->string('phone')->nullable();
            $table->integer('spend_calories')->nullable();
            $table->integer('need_calories')->nullable();
            $table->unsignedBigInteger('activity_type_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
