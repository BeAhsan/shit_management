<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    @if(isAdmin()) 
    <div class="flex flex-col gap-4">   
        @livewire('calendar') 
        @livewire('staff-list') 
        @livewire('applicant-list') 
    </div>
    @endif

    @if(!isAdmin() && isApplicant())

        @livewire('application-form')  

    @endif

    
</x-app-layout>
