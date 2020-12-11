<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ChildComponent extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.child-component', [
            'users' => User::paginate(10)
        ]);
    }
}
