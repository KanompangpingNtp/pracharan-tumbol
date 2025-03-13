<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFiles extends Model
{
    use HasFactory;

    protected $fillable = ['form_detail_id', 'files_path', 'files_type'];

    public function formDetail()
    {
        return $this->belongsTo(FormDetails::class);
    }
}
