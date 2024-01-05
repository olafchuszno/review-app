<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Like;


class LikeController extends Controller
{
    public function like_contribution(Contribution $contribution)
    {
        return Like::like_or_unlike_a_contribution($contribution) == true ?
            redirect()->back()->with('success', "Liked the contribution") :
            redirect()->back()->with('failure', "Liked the contribution");
    }
}
