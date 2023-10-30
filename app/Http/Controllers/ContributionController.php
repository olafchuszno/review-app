<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Answer;
use App\Models\Contribution;
use App\Models\Topic;
use Illuminate\Support\Facades\Validator;
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
        // Get id's of all topic's questions
        $question_ids = $topic->questions->pluck('id');
        
        // Validate the answers
        $answers = request()->validate([
            'answer.*' => ['required', 'min:1', 'max:500']
        ])['answer'];

        if (count($answers) != count($question_ids)) {

            throw ValidationException::withMessages(['failed' => 'All questions need to be answered']);
        }

        // Create the Contribution
        $contribution = Contribution::factory()->create([
            'user_id' => auth()->id(),
            'airport_id' => $airport->id,
            'topic_id' => $topic->id,
            'variant' => 'regular'
        ]);

        // Create the Answers
        for ($x = 0; $x < count($question_ids) ; $x++) {

            Answer::factory()->create([
                'contribution_id' => $contribution->id,
                'question_id' => $question_ids[$x],
                'body' => $answers[$x]
            ]);
        }

        return redirect('/')->with('success', 'Contribution was published. Thank you for your input!');
    }

}
