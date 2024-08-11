<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(isAdmin())
     <!-- <livewire:calendar />  -->
     <livewire:staff-list />
    @endif

    @if(!isAdmin() && isApplicant())
    <livewire:staff-list />
    @endif

    
</x-app-layout>
