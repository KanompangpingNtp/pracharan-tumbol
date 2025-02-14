<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfSingleTopicFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'perf_results_type_id',
        'file_path',
        'file_type',
    ];

    public function type()
    {
        return $this->belongsTo(PerfResultsType::class, 'perf_results_type_id');
    }
}
