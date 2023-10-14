<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function airport()
    {
        return $this->belongsTo(Airport::class, 'airport_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

}
