<?php
 


if (! function_exists('isAdmin')) {
    function isAdmin() : bool {
        
       if (Auth::user() && Auth::user()->role_id === 1) {
            return true;
       }
       return false;
    }
}

  

