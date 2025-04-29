<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumptionReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'water_consumptions_id',
        'users_id',
        'reply_text',
        'reply_date',
    ];

    public function waterConsumption()
    {
        return $this->belongsTo(WaterConsumption::class, 'water_consumptions_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
