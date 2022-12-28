<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $quiz = Quiz::find($id);
        $quizzes = Quiz::get();
        abort_unless($quiz, 404);
        return view('quizzes.show', [
            'quiz' => $quiz,
            'quizzes' => $quizzes
        ]);
    }
}
