<div class="w-1/6">
  
    @if(isAdmin())
    <ul>
              <li>
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    </li>
         
         </ul>
    @endif

    @if(!isAdmin())
    <ul>
    <li>
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
    </li>
    </ul>
    @endif

</div>