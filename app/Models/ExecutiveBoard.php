<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExecutiveBoard extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'position', 'phone_number', 'status','department'];

    public function images() {
        return $this->hasMany(ExecutiveBoardImage::class);
    }
}
