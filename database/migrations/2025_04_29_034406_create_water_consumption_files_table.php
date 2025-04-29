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
        Schema::create('water_consumption_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('water_consumptions_id')->constrained('water_consumptions')->cascadeOnDelete();
            $table->string('file_path');
            $table->string('file_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_consumption_files');
    }
};
