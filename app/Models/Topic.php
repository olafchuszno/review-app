<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }


    public function getRouteKeyName()
    {
        return 'name';
    }
}
