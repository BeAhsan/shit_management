<?php
 

 use App\Models\User;
 use App\Models\UserDocs;

if (! function_exists('isAdmin')) {
    function isAdmin() : bool {
        
       if (Auth::user() && Auth::user()->role_id === 1) {
            return true;
       }
       return false;
    }
}


if (! function_exists('isStaff')) {
    function isStaff() {
     if (User::find(Auth::user()->id)->role_id === 2) {
        return true;
     };
     return false;
    }
}

if (! function_exists('isApplicant')) {
    function isApplicant() {
     if (UserDocs::where('user_id', Auth::user()->id)) {
        return true;
     };
     return false;
    }

    function isApplicantHasDocuments() {
        if (User::find(Auth::user()->id)->role_id === 3) {
           return true;
        };
        return false;
       }
}

  

