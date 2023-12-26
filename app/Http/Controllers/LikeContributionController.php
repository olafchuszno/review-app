<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeContributionController extends Controller
{
    public function store(Contribution $contribution)
    {
        // Check whether the contribution exists and the like doesn't exist yet
        if (Contribution::find($contribution->id) != null && !Like::where([
            'user_id' => auth()->id(),
            'contribution_id' => $contribution->id
        ])->get()->count()) {

            // Like the contribution
            Like::factory()->create([
                'user_id' => auth()->id(),
                'contribution_id' => $contribution->id
            ]);

            // Back with success message
            return back()->with('success', 'You liked the contribution');

            // Else the contribution doesn't exist
        } else {

            return back()->with('failure', "Couldn't like the contribution");
        }
    }
}
