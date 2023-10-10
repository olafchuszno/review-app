<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
