<x-module-section>
    <h1 class="mb-4">Applicants</h1>
    <form wire:submit="getUsers" class="flex gap-3 w-1/2 mb-6" method="post">
        @csrf
        <x-input id="name" class="block mt-1 w-full" placeholder="Search By Name / Email / Application No" type="text"
                 name="name" wire:model.live="name" :value="old('name')" required autofocus autocomplete="name"/>

        <x-button class="ms-4">
            {{ __('Search') }}
        </x-button>
    </form>


    <table class="w-full">
        <thead class=" border-b-2">
        <th>
            Application #
        </th>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Status
        </th>
        <th>
            Action
        </th>
        </thead>
        <tbody>
        @foreach(($this->getUsers()) as $user)
            <tr class="border-b-2">
                <td>{{$user->staff_number == null ? '-': $user->staff_number}}</td>
                <td class="flex align-middle items-center">
                    <div class="shrink-0 m-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}"
                             alt="{{ $user->first_name }}"/>
                    </div>
                    {{$user->first_name}}
                </td>
                <td>{{$user->email}} </td>
                <td class="{{$user->active ? 'text-green-400' : 'text-yellow-400'}}">{{$user->active ? 'Active' : 'Pending'}} </td>
                <td class="flex gap-3 align-middle items-center">

                    <form action="{{route('applicant', $user->id)}}" method="get">
                        <x-button class=" bg-yellow-400">Show</x-button>
                    </form>
                    <form wire:submit="deleteUser({{$user}})" method="post">
                        <x-button class=" bg-red-600">Delete</x-button>
                    </form>
                    <form wire:submit="changeStatus({{$user}})" method="post"> @csrf
                        <x-button>{{$user->active ? 'Deactivate' : 'Activate'}}</x-button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class=" mt-4">
        {{ $this->getUsers()->links() }}
    </div>

</x-module-section>
