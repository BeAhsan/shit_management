<?php
 

 use App\Models\User;
 use App\Models\UserDocs;

   $userId = 0;

if (! function_exists('getUser')) {
   function getUser(int $id = 0) : User {
      return User::find($id !== 0 ? $id : Auth::user()->id);
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
   
   function isApplicantHasDocuments(int $userId = 0) : bool {

      if (getUser($userId)->docs !== null) {
         return true;
      }
    
      return false;
    
   }
}

if (! function_exists('getUserDocs')) {
   function getUserDocs() : null|UserDocs {
      return getUser()->docs;
   }
}

if (! function_exists('getUserDocsFiles')) {
   
   function getUserDocsFiles(int $userId = 0) : array {
      
      $files = [];
    
      if (!isApplicantHasDocuments($userId) ) {
          return $files;
      }

      foreach(json_decode(getUser($userId)->docs->files) as $file){
        
         $files[] = [
            'name'=>$file->name,
            'path'=> Storage::disk('local')->url($file->path)
         ];
     
      }
     
      return $files;
   }
}

if (! function_exists('applicatnDocsPath')) {
   function applicatnDocsPath() : string {
      return  'public/docs/'. getUser()->application_number;
   }
}

if (! function_exists('getUserDocFilesCount')) {
   function getUserDocFilesCount() {
     return count(getUserDocsFiles());
   }
}


  

