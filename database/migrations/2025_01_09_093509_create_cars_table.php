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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            // $table->string('car_plate');
            $table->string('image');
            $table->string('transmission');
            $table->integer('engine_capacity');
            $table->unsignedInteger('seat_capacity');
            $table->unsignedBigInteger('price');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
