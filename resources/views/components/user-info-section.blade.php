@props(['user'])

<div class="mt-4">

   <div class="text-3xl my-10">
      <span>{{$user->staff_number ? 'Staff Number :' : 'Application Number :'}}</span>
      <span>{{$user->staff_number ? $user->staff_number :  $user->application_number}}</span>
    </div>

    <div class="flex justify-between items-center">
      <x-title>{{ __('Details') }}</x-title>
        <a  href="{{ isAdmin() ? '#' : route('profile.show') }}" >edit</a>
    </div>

    
    <div>
        <span>First Name : </span>
        <span>{{$user->first_name}}</span>
     </div>

     <div>
        <span>Last Name : </span>
        <span>{{$user->last_name}}</span>
     </div>

     <div>
        <span>Email : </span>
        <span>{{$user->phone}}</span>
     </div>

     <div>
        <span>Phone : </span>
        <span>{{$user->phone}}</span>
     </div>

    <div>
       <span>Address : </span>
       <span>{{$user->address}}</span>
    </div>
</div>