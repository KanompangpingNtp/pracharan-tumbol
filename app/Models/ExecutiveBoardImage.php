<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExecutiveBoardImage extends Model
{
    use HasFactory;

    protected $fillable = ['executive_board_id', 'photo_file'];

    public function executiveBoard() {
        return $this->belongsTo(ExecutiveBoard::class);
    }
}
