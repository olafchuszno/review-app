<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index(Airport $airport)
    {
        return view('topic.index', [
            'airport' => $airport
        ]);
    }
}
