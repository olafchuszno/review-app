<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contribution;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;

class MyContributionController extends Controller
{
    public function index()
    {
        // Display all user's contributions, paginated to 8 results per page.
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
            'contribution' => $contribution,
            'answers' => $contribution->answers
        ]);
    }

    public function edit(Contribution $contribution)
    {
        // Check for authorization of ownership of the contribution
        if (auth()->user()->id != $contribution->author->id) {

            // User is not the author, throw an exception
            return throw new AuthorizationException('This action is forbidden', 403);
        }

        // User authorized, return the view
        return view('my_contribution.edit', [
            'contribution' => $contribution,
            'questions' => $contribution->topic->questions,
            'answers' => $contribution->answers
        ]);
    }

    public function update(Contribution $contribution)
    {
        // Get id's of all topic's questions
        $question_ids = $contribution->topic->questions->pluck('id')->all();

        // Validate the answers
        $answers = request()->validate([
            'answer.*' => ['required', 'min:1', 'max:500']
        ])['answer'];

        // Check whether all questions were answered
        if (array_keys($answers) != $question_ids) {

            throw ValidationException::withMessages(['failed' => 'All questions need to be answered']);
        }

        // Get old answers from the database
        $old_answers = $contribution->answers;

        // Update the answers
        foreach ($answers as $key => $answer) {
            $old_answers[$key - 1]->update(['body' => $answer]);
        }

        return redirect("/my/contributions/{$contribution->id}")->with('success', 'Contribution was updated');
    }

    public function destroy(Contribution $contribution)
    {
        if ($contribution->author->id == auth()->user()->id) {

            $contribution->delete();

            return redirect('/my/contributions')->with('success', 'Your contribution was deleted');
        }

        return throw new AuthorizationException('This action is forbidden', 403);
    }
}
