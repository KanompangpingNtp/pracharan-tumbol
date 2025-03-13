<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormDetails extends Model
{
    use HasFactory;

      protected $fillable = [
        'form_type_id', 'users_id','full_name', 'gender', 'phone', 'mail', 'address', 'complaints', 'details'
    ];

    public function formType()
    {
        return $this->belongsTo(FormType::class);
    }

    public function formFiles()
    {
        return $this->hasMany(FormFiles::class);
    }
}
