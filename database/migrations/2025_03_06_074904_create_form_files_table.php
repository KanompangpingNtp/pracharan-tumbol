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
        Schema::create('form_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_detail_id')->constrained('form_details')->cascadeOnDelete();
            $table->string('files_path');
            $table->string('files_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_files');
    }
};
