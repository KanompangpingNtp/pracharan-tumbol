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
        Schema::create('personnel_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personnel_rank_id')->constrained('personnel_ranks')->cascadeOnDelete();
            $table->string('full_name');
            $table->string('department')->nullable();
            $table->string('phone');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_details');
    }
};
