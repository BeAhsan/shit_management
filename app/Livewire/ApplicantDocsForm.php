<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\UserDocs;

class ApplicantDocsForm extends Component
{
    use WithFileUploads;
   
    public $file_1;
    public $file_2;
    public $file_3;

    public function render()
    {
        return view('livewire.applicant-docs-form');
    }

    function uploadDocs(User $user) {
     
        $this->validate([
            'file_1' => 'required',
            'file_2' => 'required',
            'file_3' => 'required',
        ]);


        $files = [
            [
                'name'=>'file_1',
                'path' => $this->file_1->store('public/docs/')

            ],
            [
                'name'=>'file_2',
                'path' => $this->file_2->store('public/docs/')

            ],
            [
                'name'=>'file_3',
                'path' => $this->file_3->store('public/docs/')

            ],
        ];

        UserDocs::create([
            'type' => 'new',
            'user_id' => $user->id,
            'files' => \json_encode($files),
        ]);
      
    }

}
