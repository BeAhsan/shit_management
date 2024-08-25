<x-app-layout>
<x-module-section>
    <x-user-info-section :user="getUser($id)"/>
    @livewire('applicant-docs-verification', [ 'userId'=> $id ])
</x-module-section>
</x-app-layout>
