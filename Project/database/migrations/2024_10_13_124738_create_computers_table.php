<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // ใช้ string สำหรับชื่อคอมพิวเตอร์
            $table->string('brand'); // ใช้ string สำหรับแบรนด์
            $table->text('specifications'); // ใช้ text สำหรับสเปค
            $table->decimal('price', 10, 2); // ใช้ decimal สำหรับราคา
            $table->timestamps(); // สร้าง timestamps
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
