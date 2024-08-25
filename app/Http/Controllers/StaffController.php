<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StaffController extends Controller
{
    function applicationProcess(User $user) {
        User::findorfail($user->id)->update(['staff_number'=> 'sf-'.random_int(000000,999999), 'role_id'=> 2]);

        return redirect('dashboard');
   }
}
