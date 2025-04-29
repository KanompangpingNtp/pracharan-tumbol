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
        Schema::create('water_consumptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status')->nullable();
            $table->string('admin_name_verifier')->nullable();
            $table->string('salutation')->nullable();
            $table->string('full_name')->nullable();
            $table->string('address')->nullable();
            $table->string('village')->nullable();
            $table->string('occupation')->nullable();
            $table->string('number_people')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('number_trips')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_consumptions');
    }
};
