<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index()
    {
        return view('topic.index');
    }
}
