<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;

class ShowQuizzes extends Component
{
    public $quizzes;

    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function mount()
    {
        $this->quizzes = Quiz::get();
    }

    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.show-quizzes');
    }
}
