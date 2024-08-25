<div class="mt-4">

   <div class="text-3xl my-10">
      <span>{{getUser()->staff_number ? 'Staff Number :' : 'Application Number :'}}</span>
      <span>{{getUser()->staff_number ? getUser()->staff_number :  getUser()->application_number}}</span>
    </div>

    <div class="flex justify-between items-center">
      <x-title>{{ __('Details') }}</x-title>
        <a  href="{{ route('profile.show') }}" >edit</a>
    </div>

    
    <div>
        <span>First Name : </span>
        <span>{{getUser()->first_name}}</span>
     </div>

     <div>
        <span>Last Name : </span>
        <span>{{getUser()->last_name}}</span>
     </div>

     <div>
        <span>Email : </span>
        <span>{{getUser()->phone}}</span>
     </div>

     <div>
        <span>Phone : </span>
        <span>{{getUser()->phone}}</span>
     </div>

    <div>
       <span>Address : </span>
       <span>{{getUser()->address}}</span>
    </div>
</div>