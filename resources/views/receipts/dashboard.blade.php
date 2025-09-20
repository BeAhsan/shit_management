<x-app-layout>
    <x-module-section>
        <div class="flex gap-3 flex-col sm:flex-row">

            @foreach($receiptsModules as $module)
                <a href="{{route($module['path'])}}" class="w-full h-24 sm:w-24 bg-gray-600
                flex items-center
                justify-center
                rounded-md flex-row">
                    {{$module['text']}}
                </a>
            @endforeach

        </div>
    </x-module-section>
</x-app-layout>
