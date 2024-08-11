<div>
    <h1>List</h1>

  
        <form wire:submit.prevent="search" class="flex gap-3 w-1/2" method="post">
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <x-button class="ms-4">
                    {{ __('Search') }}
                </x-button>
        </form>
    

    <table class="w-full">
        <thead class=" border-b-2">
            <th>
                Staff #
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
        </thead>
        <tbody>
        @foreach($this->getAll() as $user)
         <tr class="border-b-2 h-12">
            <td>{{$user->staff_number == null ? '-': $user->staff_number}}</td> 
            <td>{{$user->name}}</td> 
            <td>{{$user->email}} </td>
            <td>{{$user->active ? 'Active' : 'Pending'}} </td>    
        </tr> 
        @endforeach
        </tbody>
    </table>
    <div class=" mt-4">
    {{ $this->getAll()->links() }}
    </div>
   
</div>
