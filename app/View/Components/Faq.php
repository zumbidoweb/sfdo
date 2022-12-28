<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Faq as Model;

class Faq extends Component
{
    public $faqs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faqs = Model::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faq');
    }
}
