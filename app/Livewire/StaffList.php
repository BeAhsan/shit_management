<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Request;

class StaffList extends Component
{
    public function render()
    {
        return view('livewire.staff-list');
    }

    function search(Request $request){
        dd($request);
    }

    public function getAll() {
      return  User::where('role_id', 2)
        ->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'users'
        
      );
    }
}
