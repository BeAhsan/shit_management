<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Shift;

class ShiftsList extends Component
{
    public function render()
    {
        return view('livewire.shifts-list');
    }

    function getAllShifts() {
        return Shift::all();
    }
}
