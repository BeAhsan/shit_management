<div>

    <div class="mb-5">
        <x-action-button type='new' title='create new Shift' />
    </div>

    <button 
    type="button"
    x-data=""
    x-on:click="$dispatch('open-modal', 'register')">Register now!
</button>

<x-modal id="register">
   resn
</x-modal>

    <table class=" w-full">
        <thead>
            <th>Staff</th>
            <th>Title</th>
            <th>Address</th>
            <th>Start On</th>
            <th>End On</th>
            <th>Actions</th>
        </thead>


    <tbody class=" text-center">
    @foreach ($this->getAllShifts() as $shift)
    <tr>
    <td class="flex align-middle items-center">
        <div class="shrink-0 m-3">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $shift->user->profile_photo_url }}" alt="{{ $shift->user->first_name }}" />
            </div>
        {{$shift->user->first_name}}
    </td>  
    <td>{{$shift->title}}</td>
    <td >{{$shift->address}}</td>
    <td >{{$shift->start}}</td>
    <td>{{$shift->end}}</td>
    <td>
     <x-action-button type='edit' title='edit' />
    </td>
    @endforeach
</tr>
</tbody>
</table>
</div>
