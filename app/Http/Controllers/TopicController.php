<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index(Airport $airport)
    {

        $topics = $airport->topics()->get();

        return view('topic.index', [
            'airport' => $airport,
            'topics' => $airport->topics()->get()
        ]);
    }
}
