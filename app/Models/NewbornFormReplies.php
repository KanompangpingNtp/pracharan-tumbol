<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewbornFormReplies extends Model
{
    use HasFactory;

    protected $fillable = ['newborn_id', 'users_id', 'reply_text', 'reply_date'];

    public function details()
    {
        return $this->belongsTo(NewbornInformations::class, 'newborn_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
