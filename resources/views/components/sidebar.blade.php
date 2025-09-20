<div class="w-1/6 hidden sm:block">

    @if(isAdmin())
        <ul>
            <li>
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            @if(IsModuleActive('shift_system'))
                <li>
                    <x-nav-link href="{{ route('go_to_shifts_manager') }}"
                                :active="request()->routeIs('go_to_shifts_manager')">
                        {{ __('Shifts') }}
                    </x-nav-link>
                </li>
            @endif
            @if(IsModuleActive('receipt_system'))
                <li>
                    <x-nav-link href="{{ route('receipt.index') }}"
                                :active="request()->routeIs('receipt.index')">
                        {{ __('Receipts') }}
                    </x-nav-link>
                </li>
            @endif
            <li>
                <x-nav-link href="{{ route('modules.index') }}"
                            :active="request()->routeIs('modules.index')">
                    {{ __('Modules') }}
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
