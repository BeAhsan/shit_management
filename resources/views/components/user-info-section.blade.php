<div class="mt-4">

    <div class="flex justify-between">
        <h1>Details</h1>
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