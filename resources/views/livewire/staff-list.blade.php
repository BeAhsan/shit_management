<div>
  
        <form wire:submit.prevent="getUsers" class="flex gap-3 w-1/2 mb-12" method="post">
        @csrf 
                <x-input id="name" class="block mt-1 w-full" placeholder="Search By Name" type="text" name="name"  wire:model="name" :value="old('name')" required autofocus autocomplete="name" />
            
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
        @foreach(($this->getUsers()) as $user)
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
    {{ $this->getUsers()->links() }}
    </div>
   
</div>
