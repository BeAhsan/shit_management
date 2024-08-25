<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ApplicantDocsForm extends Component
{
    public function render()
    {
        return view('livewire.applicant-docs-form');
    }

    function uploadDocs(UploadedFile $file,  $storagePath = 'profile-docs') {
       
        // $validated = $request->validate([
        //     'file_1' => 'required|file'
        // ]);

     //   $request->file('file_1')->store('uploads','public');
        $data = $file->storePublicly(
            $storagePath, 'public'
        );
    }

    //     /**
    //  * Get the disk that profile photos should be stored on.
    //  *
    //  * @return string
    //  */
    // protected function DocsDisk()
    // {
    //     return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : config('jetstream.profile_photo_disk', 'public');
    // }
}
