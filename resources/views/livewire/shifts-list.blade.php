<div>

    <table>
        <thead>
            <th>Staff</th>
            <th>Title</th>
            <th>Address</th>
            <th>Start On</th>
            <th>End On</th>
        </thead>
    </table>

    @foreach ($this->getAllShifts() as $shift)
    <td class="flex align-middle items-center">
        <div class="shrink-0 m-3">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $shift->user->profile_photo_url }}" alt="{{ $shift->user->first_name }}" />
            </div>
        {{$shift->user->first_name}}
    </td>  
    @endforeach
</div>
