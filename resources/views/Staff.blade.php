<x-app-layout>
    <x-module-section>
        <x-user-info-section :user="getUser($id)"/>
        @if (isApplicantHasDocuments($id))
        @livewire('applicant-docs-verification', [ 'userId'=> $id ])
     @endif
    </x-module-section>
</x-app-layout>