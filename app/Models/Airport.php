<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
