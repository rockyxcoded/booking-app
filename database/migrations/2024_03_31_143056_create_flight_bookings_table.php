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

        Schema::create('flight_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('location');
            $table->string('destination');
            $table->datetime('departure_date')->nullable();
            $table->datetime('return_date')->nullable();
            $table->string('cabin_class');
            $table->string('trip_type')->nullable();
            $table->unsignedInteger('adults')->nullable();
            $table->unsignedInteger('children')->nullable();
            $table->json('flight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_bookings');
    }
};
