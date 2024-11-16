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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('booking_id');
            $table->string('full_name');
            $table->integer('id_no');
            $table->integer('seats');
            $table->string('contact');
            $table->string('terminal');
            $table->string('destination');
            $table->string('duration');
            $table->timestamp('departure');
            $table->integer('price');
            $table->string('address');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
