<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumptionFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'water_consumptions_id',
        'file_path',
        'file_type',
    ];

    public function waterConsumption()
    {
        return $this->belongsTo(WaterConsumption::class, 'water_consumptions_id');
    }
}
