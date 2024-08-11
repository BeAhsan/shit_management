<?php
 

 use App\Models\User;

if (! function_exists('isAdmin')) {
    function isAdmin() : bool {
        
       if (Auth::user() && Auth::user()->role_id === 1) {
            return true;
       }
       return false;
    }
}

if (! function_exists('isApplicant')) {
    function isApplicant() {
     if (User::find(Auth::user()->id)->staff_number === null) {
        return true;
     };
     return false;
    }
}

  

