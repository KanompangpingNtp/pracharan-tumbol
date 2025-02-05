<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelRank extends Model
{
    use HasFactory;

    protected $fillable = ['personnel_agency_id', 'personnel_rank_name', 'status'];

    public function agency()
    {
        return $this->belongsTo(PersonnelAgency::class);
    }

    public function details()
    {
        return $this->hasMany(PersonnelDetail::class);
    }
}
