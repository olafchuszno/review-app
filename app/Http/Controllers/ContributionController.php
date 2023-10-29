<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Answer;
use App\Models\Contribution;
use App\Models\Question;
use App\Models\Topic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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

    public function create(Airport $airport, Topic $topic)
    {
        return view('contribution.create', [
            'airport' => $airport,
            'topic' => $topic,
            'questions' => $topic->questions
        ]);
    }

    public function store(Airport $airport, Topic $topic)
    {
        // Get ids of all questions that belong to the topic
        $question_shorts = $topic->questions->pluck('short');

        // Get ids of all questions that belong to the topic
        $question_ids = $topic->questions->pluck('id');
        
        
        // Validate the answers
        foreach($question_shorts as $question_short) {

            $answers[] = request()->validate([
                $question_short => ['required', 'min:1', 'max:500']
            ]);
        }

        // Create the Contribution
        $contribution = Contribution::factory()->create([
            'user_id' => auth()->id(),
            'airport_id' => $airport->id,
            'topic_id' => $topic->id,
            'variant' => 'regular'
        ]);

        // Create the Answers
        foreach (range(0, count($answers)-1) as $x) {

            Answer::factory()->create([
                'contribution_id' => $contribution->id,
                'question_id' => $question_ids[$x],
                'body' => array_values($answers[$x])[0]
            ]);
        }

        return redirect('/')->with('success', 'Contribution was published. Thank you for your input!');
    }

}
