<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuizImporter extends Component
{
    public function import()
    {
    }

    public function render()
    {
        return <<<'blade'
            <div>
                 <button wire:click="import"></button>
            </div>
        blade;
    }
}
