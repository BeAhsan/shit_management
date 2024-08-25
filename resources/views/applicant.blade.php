<x-app-layout>
<x-module-section>
    <x-user-info-section :user="getUser($id)"/>

  
    @if (isApplicantHasDocuments($id))
       @livewire('applicant-docs-verification', [ 'userId'=> $id ])
       @else
       <span class="text-xl my-5">Documents <b>required!</b></span>
    @endif

    @if (isApplicantDocsVerified($id))
    <x-button class="ms-4 bg-green-500">
        {{ __('Procced Application') }}
    </x-button>
    @endif

</x-module-section>
</x-app-layout>
