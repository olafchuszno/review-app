<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contribution;
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
}
