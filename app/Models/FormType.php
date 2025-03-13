<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function formDetails()
    {
        return $this->hasMany(FormDetails::class);
    }
}
