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
        Schema::create('perf_results_minor_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perf_results_minor_detail_id')->constrained('perf_results_minor_details')->onDelete('cascade');
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
        Schema::dropIfExists('perf_results_minor_files');
    }
};
