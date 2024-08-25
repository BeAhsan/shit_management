<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserDocs;
class ApplicantDocsVerification extends Component
{
    public $userId;

    public function render()
    {
        return view('livewire.applicant-docs-verification');
    }

    function verified(UserDocs $userDocs) {
        UserDocs::findOrFail($userDocs->id)->update(['verified'=>$userDocs->verified ? 0:1]);
    }

}
