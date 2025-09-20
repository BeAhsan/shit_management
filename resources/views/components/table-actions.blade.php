@props([
    'editRoute' => null,
    'deleteRoute' => null,
    'showRoute' => null,
    'modelId' => null,
    'editText' => 'Edit',
    'deleteText' => 'Delete',
    'showText' => 'View',
    'showIcon' => false,
    'size' => 'sm', // sm, md, lg
    'vertical' => false,
    'deleteConfirmation' => 'Are you sure you want to delete this item?',
    'extraButtons' => [],
])

@php
    $sizeClasses = [
        'sm' => 'px-2 py-1 text-xs',
        'md' => 'px-3 py-1.5 text-sm',
        'lg' => 'px-4 py-2 text-base'
    ][$size];

    $containerClass = $vertical
        ? 'flex flex-col space-y-1'
        : 'flex items-center space-x-1';
@endphp

<div {{ $attributes->merge(['class' => $containerClass]) }}>

    @if($showRoute)
        <a href="{{ route($showRoute, $modelId) }}"
           class="inline-flex items-center {{ $sizeClasses }} bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
            @if($showIcon)
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            @endif
            {{ $showText }}
        </a>
    @endif


    @if($editRoute)
        <a href="{{ route($editRoute, $modelId) }}"
           class=" {{ $sizeClasses }}">
            @if($showIcon)
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
            @endif
            {{ $editText }}
        </a>
    @endif

    @if($deleteRoute)
        <form action="{{ route($deleteRoute, $modelId) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit"
                    onclick="return confirm('{{ $deleteConfirmation }}')"
                    class="inline-flex items-center {{ $sizeClasses }} bg-red-600 text-white rounded hover:bg-red-700 transition-colors">
                @if($showIcon)
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                @endif
                {{ $deleteText }}
            </button>
        </form>
    @endif

    {{--   // Extra custom buttons--}}
    @foreach($extraButtons as $button)
        @if(isset($button['route']))
            @if(isset($button['type']))

                @if($button['type'] === 'submit')
                    <form action="{{ route($button['route'], $modelId) }}" method="POST" class="inline">
                        @csrf
                        <Button
                            class="inline-flex items-center {{ $sizeClasses }} {{ $button['class'] ?? 'bg-gray-600 text-white' }} rounded hover:opacity-90 transition-colors"
                        >{{$button['text']}}
                        </Button>
                    </form>
                @endif

                @if($button['type'] === 'link')
                    <a href="{{ route($button['route'], $modelId) }}"
                       class="inline-flex items-center {{ $sizeClasses }} {{ $button['class'] ?? 'bg-gray-600 text-white' }} rounded hover:opacity-90 transition-colors">
                        @if($showIcon && isset($button['icon']))
                            {!! $button['icon'] !!}
                        @endif
                        {{ $button['text'] ?? 'Button' }}
                    </a>
                @endif

            @endif
        @endif
    @endforeach

    {{ $slot }}
</div>
