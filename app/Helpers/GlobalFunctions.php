<?php
 

 use App\Models\User;
 use App\Models\UserDocs;

 

if (! function_exists('getUser')) {
   function getUser() : User {
      return User::find(Auth::user()->id);
   }
}

if (! function_exists('isAdmin')) {
    function isAdmin() : bool {
        
       if (getUser()->role_id === 1) {
            return true;
       }
       return false;
    }
}


if (! function_exists('isStaff')) {
    function isStaff() {
     if (getUser()->role_id === 2) {
        return true;
     };
     return false;
    }
}

if (! function_exists('isApplicant')) {
    function isApplicant() {
     if (getUser()->role_id === 3) {
        return true;
     };
     return false;
    }
}

if (! function_exists('isApplicantHasDocuments')) {
   function isApplicantHasDocuments() : bool {
    
      $userDocs = json_decode(getUserDocs()->files);
      
      if (getUser()->Docs !== null || count($userDocs) < 3) {
         return true;
      }
    
      return false;
    
   }
}

if (! function_exists('getUserDocs')) {
   function getUserDocs() : UserDocs {
      return getUser()->docs;
   }
}

// if (! function_exists('getUserDocFilesCount')) {
//    function getUserDocFilesCount() {
//     $docs =  trim(getUserDocs()->files, "[]");
//     $docs2[] = $docs;
//      return $docs2;
//    }
// }


  

