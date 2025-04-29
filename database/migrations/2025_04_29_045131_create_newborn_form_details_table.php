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
        Schema::create('newborn_form_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('newborn_id')->constrained('newborn_informations')->onDelete('cascade');
            $table->text('relationship')->nullable();
            $table->text('relationship_detail')->nullable();
            $table->text('salutation_parent')->nullable();
            $table->text('fullname_parent')->nullable();
            $table->text('idcard_parent')->nullable();
            $table->date('birthday_parent')->nullable();
            $table->text('nationality_parent')->nullable();
            $table->text('address_parent')->nullable();
            $table->text('village_parent')->nullable();
            $table->text('building_parent')->nullable();
            $table->text('floor')->nullable();
            $table->text('room')->nullable();
            $table->text('village_name_parent')->nullable();
            $table->text('alley_parent')->nullable();
            $table->text('road_parent')->nullable();
            $table->text('subdistrict_parent')->nullable();
            $table->text('district_parent')->nullable();
            $table->text('province_parent')->nullable();
            $table->text('postal_code_parent')->nullable();
            $table->text('phone_house_parent')->nullable();
            $table->text('phone_number_parent')->nullable();
            $table->text('occupation_parent')->nullable();
            $table->text('occupation_detail')->nullable();
            $table->text('education_parent')->nullable();
            $table->text('education_detail')->nullable();
            $table->text('salutation_children')->nullable();
            $table->text('fullname_children')->nullable();
            $table->text('idcard_children')->nullable();
            $table->date('birthday_children')->nullable();
            $table->text('salutation_mother')->nullable();
            $table->text('fullname_mother')->nullable();
            $table->text('idcard_mother')->nullable();
            $table->text('age_mother')->nullable();
            $table->text('nationality_mother')->nullable();
            $table->date('birthday_mother')->nullable();
            $table->text('occupation_mother')->nullable();
            $table->text('occupation_detail_mother')->nullable();
            $table->text('education_mother')->nullable();
            $table->text('education_detail_mother')->nullable();
            $table->text('salutation_father')->nullable();
            $table->text('fullname_father')->nullable();
            $table->text('idcard_father')->nullable();
            $table->text('age_father')->nullable();
            $table->text('nationality_father')->nullable();
            $table->date('birthday_father')->nullable();
            $table->text('occupation_father')->nullable();
            $table->text('occupation_detail_father')->nullable();
            $table->text('education_father')->nullable();
            $table->text('education_detail_father')->nullable();
            $table->text('account')->nullable();
            $table->text('account_name')->nullable();
            $table->text('account_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newborn_form_details');
    }
};
