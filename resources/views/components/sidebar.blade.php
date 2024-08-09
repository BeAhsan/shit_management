<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex w-1/3">
   <ul>
         @for ($i = 0; $i < 3; $i++)
              <li>
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    </li>
                
         @endfor  
 </ul>
</div>