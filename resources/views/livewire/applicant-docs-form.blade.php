<div class=" my-10">
    <x-title>{{ __('Required Docs') }}</x-title>

    <form wire:submit="uploadDocs" class="w-full flex flex-row gap-4" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <x-label for="file_1" value="{{ __('File 1') }}" />
            <x-input id="file_1" class="block mt-1 w-full" type="file" wire:model.live="file_1"
            x-ref="file_1" required autofocus />
        </div>
        <div>
            <x-label for="file_2" value="{{ __('File 2') }}" />
            <x-input id="file_2" class="block mt-1 w-full" type="file" wire:model.live="file_2"
            x-ref="file_2" required autofocus />
        </div>
        <div>
            <x-label for="file_3" value="{{ __('File 3') }}" />
            <x-input id="file_3" class="block mt-1 w-full" type="file" wire:model.live="file_3"
            x-ref="file_3" required autofocus />
        </div>

        <x-button class="ms-4">
            {{ __('Submit') }}
        </x-button>
    </form>
</div>

