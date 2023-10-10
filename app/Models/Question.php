<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
