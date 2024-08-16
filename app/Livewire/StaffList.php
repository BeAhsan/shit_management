<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class StaffList extends Component
{
    public $name = '';
    public $searchedUser = [];
    public function render()
    {
        return view('livewire.staff-list');
    }

    function changeStatus(User $user) : void {
     User::findOrFail($user->id)->update(['active'=>$user->active ? 0:1]);
    }

    function deleteUser(User $user) : void {
        User::findOrFail($user->id)->delete();
    }

    public function getUsers() {

       if ($this->name) {
       
       return User::where('name','LIKE','%'.$this->name.'%')
       ->orWhere('staff_number','LIKE','%'.$this->name.'%')
       ->orWhere('email','LIKE','%'.$this->name.'%')->paginate(8);
      
    } 

       return User::where('role_id', 2)
        ->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'users'
        
      );
    }
}
