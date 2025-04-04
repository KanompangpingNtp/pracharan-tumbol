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
        Schema::create('post_pdfs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_detail_id')->constrained('post_details')->cascadeOnDelete();
            $table->string('post_pdf_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_pdfs');
    }
};
