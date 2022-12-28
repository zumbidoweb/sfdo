@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center space-x-2 pl-2 pr-3 pt-1 border-b-2 border-primary-400 text-sm font-medium leading-5 text-primary-400 focus:outline-none focus:border-primary-700 transition duration-150 ease-in-out'
: 'inline-flex space-x-2 items-center pl-2 pr-3 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-100 hover:text-primary-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>