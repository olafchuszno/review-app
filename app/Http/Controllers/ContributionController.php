<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Answer;
use App\Models\Contribution;
use App\Models\Topic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
        $question_ids = $topic->questions->pluck('id')->all();
        
        // Validate the answers
        $answers = request()->validate([
            'answer.*' => ['required', 'min:1', 'max:500']
        ])['answer'];


        // Check whether all questions were answered
        if (array_keys($answers) != $question_ids) {

            throw ValidationException::withMessages(['failed' => 'All questions need to be answered']);
        }

        // Create the Contribution
        $contribution = Contribution::factory()->create([
            'user_id' => auth()->user()->id,
            'airport_id' => $airport->id,
            'topic_id' => $topic->id,
            'variant' => 'regular'
        ]);

        // Create the Answers
        foreach ($question_ids as $question_id) {

            Answer::factory()->create([
                'contribution_id' => $contribution->id,
                'question_id' => $question_id,
                'body' => $answers[$question_id]
            ]);
        }

        return redirect("/airports/{$airport->code}/basic_info")->with('success', 'Contribution was published. Thank you for your input!');
    }

}
