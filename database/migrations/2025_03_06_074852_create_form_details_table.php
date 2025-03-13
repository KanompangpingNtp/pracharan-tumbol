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
        Schema::create('form_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_type_id')->constrained('form_types')->onDelete('cascade');
            $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('full_name');
            $table->string('gender')->nullable();
            $table->string('phone');
            $table->string('mail')->nullable();
            $table->string('address')->nullable();
            $table->string('complaints');
            $table->string('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_details');
    }
};
