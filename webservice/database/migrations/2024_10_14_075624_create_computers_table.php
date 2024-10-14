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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand'); // เพิ่มคอลัมน์ brand
            $table->string('model'); // เพิ่มคอลัมน์ model
            $table->string('processor'); // เพิ่มคอลัมน์ processor
            $table->integer('ram'); // เพิ่มคอลัมน์ ram
            $table->string('storage'); // เพิ่มคอลัมน์ storage
            $table->string('graphics_card'); // เพิ่มคอลัมน์ graphics_card
            $table->boolean('is_available'); // เพิ่มคอลัมน์ is_available
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
