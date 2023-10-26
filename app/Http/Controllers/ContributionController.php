<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Contribution;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index(Airport $airport, Topic $topic)
    {
        return view('contribution.index', [
            'topic' => $topic,
            'airport' => $airport,
            'questions' => $topic->questions,
            'contributions' => Contribution::where('topic_id', $topic->id)->where('airport_id', $airport->id)->paginate(3)
        ]);
    }

    public function choose_category(Airport $airport)
    {
        return view('contribution.choose_category', [
            'airport' => $airport,
            'topics' => Topic::all()
        ]);
    }

    public function create(Airport $airport)
    {
        $topic = Topic::findOrFail(request('topic'));

        return view('contribution.create', [
            'airport' => $airport,
            'topic' => $topic,
            'questions' => $topic->questions
        ]);
    }

}
