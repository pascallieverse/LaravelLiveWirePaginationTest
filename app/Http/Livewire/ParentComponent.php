<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $value = false;

    public function render()
    {
        return view('livewire.parent-component');
    }
}
