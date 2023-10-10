<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function airport()
    {
        return $this->belongsTo(Airport::class, 'airport_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
