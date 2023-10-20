<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index(Airport $airport, Topic $topic)
    {
        return view('contribution.index', [
            'topic' => $topic,
            'airport' => $airport
        ]);
    }
}
