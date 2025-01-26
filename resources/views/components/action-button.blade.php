@props([
    'type' => '',
    'title' => '',
    'route' => ''
])

<a href="{{$route}}" class=" p-2 text-white rounded-md 
{{ $type === 'new' ? 'bg-blue-400 hover:bg-blue-600' : '' }}
{{$type === 'edit' ? 'bg-orange-400 hover:bg-orange-600' : ''}}
{{$type === 'delete' ? 'bg-red-400 hover:bg-red-600' : ''}}
"> {{ Str::upper($title) }}</a>