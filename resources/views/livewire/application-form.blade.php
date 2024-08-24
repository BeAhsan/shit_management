
<x-module-section>
   <x-section-title title="Application" description="Please Fill All Information"/>
   <form action=""  method="post">
       @csrf
     <div class="grid grid-cols-2 gap-2">
         <div>
            <x-label for="Name" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>
        <div>
         <x-label for="email" value="{{ __('Email') }}" />
         <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
     </div>
     
       </div>
   </form>
</x-module-section>
