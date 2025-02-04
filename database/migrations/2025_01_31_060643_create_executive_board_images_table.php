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
        Schema::create('executive_board_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('executive_board_id')->constrained('executive_boards')->onDelete('cascade');
            $table->string('photo_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('executive_board_images');
    }
};
