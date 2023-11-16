<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contribution;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyContributionController extends Controller
{
    public function index()
    {        
        // Display all user's contributions, paginated to 6 results per page.
        return view('my_contribution.index', [
            'contributions' => User::find(auth()->user()->id)->contributions->paginate(8)
        ]);
    }

    public function show(Contribution $contribution)
    {
        // Check for authorization to see the contribution
        if (auth()->user()->id != $contribution->author->id) {

            return throw new AuthorizationException('This action is forbidden', 403);
        }

        // Display the (user's) contribution
        return view('my_contribution.show', [
            'contribution' => $contribution->with('answers')->get()->first()
        ]);
    }

    public function edit()
    {
        dd('MyContribution.edit')
    }

    public function update(Contribution $contribution)
    {
        dd('MyContribution.update');
    }

    public function destroy(Contribution $contribution)
    {
        dd('MyContribution.destroy');
    }
}
