<x-module-section>
<div>
    <h1>{{ __('Required Docs') }}</h1>

    <form wire:submit.prevent="uploadDocs" method="post"enctype="multipart/form-data">
        @csrf
        <div>
            <x-label for="file_1" value="{{ __('File 1') }}" />
            <x-input id="file_1" class="block mt-1 w-full" type="file" name="file_1" :value="old('file_1')" required autofocus autocomplete="file_1" />
        </div>
        {{-- <div>
            <x-label for="file_2" value="{{ __('File 2') }}" />
            <x-input id="file_2" class="block mt-1 w-full" type="file" name="file_2" :value="old('file_2')" required autofocus autocomplete="file_2" />
        </div>
        <div>
            <x-label for="file_3" value="{{ __('File 3') }}" />
            <x-input id="file_3" class="block mt-1 w-full" type="file" name="file_3" :value="old('file_3')" required autofocus autocomplete="file_3" />
        </div> --}}

        <x-button class="ms-4">
            {{ __('Submit') }}
        </x-button>
    </form>
</div>
</x-module-section>
