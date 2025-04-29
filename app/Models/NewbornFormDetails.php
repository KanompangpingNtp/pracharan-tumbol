<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewbornFormDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'newborn_id',
        'relationship',
        'relationship_detail',
        'salutation_parent',
        'fullname_parent',
        'idcard_parent',
        'birthday_parent',
        'nationality_parent',
        'address_parent',
        'village_parent',
        'building_parent',
        'floor',
        'room',
        'village_name_parent',
        'alley_parent',
        'road_parent',
        'subdistrict_parent',
        'district_parent',
        'province_parent',
        'postal_code_parent',
        'phone_house_parent',
        'phone_number_parent',
        'occupation_parent',
        'occupation_detail',
        'education_parent',
        'education_detail',
        'salutation_children',
        'fullname_children',
        'idcard_children',
        'birthday_children',
        'salutation_mother',
        'fullname_mother',
        'idcard_mother',
        'age_mother',
        'nationality_mother',
        'birthday_mother',
        'occupation_mother',
        'occupation_detail_mother',
        'education_mother',
        'education_detail_mother',
        'salutation_father',
        'fullname_father',
        'idcard_father',
        'age_father',
        'nationality_father',
        'birthday_father',
        'occupation_father',
        'occupation_detail_father',
        'education_father',
        'education_detail_father',
        'account',
        'account_name',
        'account_id',
    ];

    public function information()
    {
        return $this->belongsTo(NewbornInformations::class, 'newborn_id');
    }
}
