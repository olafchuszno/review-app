<?php

namespace App\Models;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Like extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likable()
    {
        return $this->morphTo();
    }

    static function like_or_unlike_a_contribution(Contribution $contribution): bool
    {
        $like = Like::where([
            'likable_id' => $contribution->id,
            'likable_type' => 'App\Models\Contribution'
        ]);

        // Check whether hasn't user already liked the contribution
        if ($like->count()) {

            $like->delete();

            return false;
        }

        // Like the contribution
        Like::factory()->create([
            'user_id' => auth()->id(),
            'likable_type' => 'App\Models\Contribution',
            'likable_id' => $contribution->id
        ]);

        return true;
    }
}
