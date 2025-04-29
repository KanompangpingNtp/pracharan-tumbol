<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumption extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'status',
        'admin_name_verifier',
        'salutation',
        'full_name',
        'address',
        'village',
        'occupation',
        'number_people',
        'phone_number',
        'number_trips',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function files()
    {
        return $this->hasMany(WaterConsumptionFiles::class, 'water_consumptions_id');
    }

    public function replies()
    {
        return $this->hasMany(WaterConsumptionReply::class, 'water_consumptions_id');
    }
}
