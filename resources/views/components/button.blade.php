@props([
'variant' => 'primary',
'href'=>'',
'icon'=>'' ,
'large' => false
])

<?php 
$classes = [
    'primary'   => '!text-white bg-primary-600 hover:bg-primary-700 focus:bg-gray-600 active:bg-primary-800 focus:ring-primary-500 border-transparent',
    'dark'      => '!text-white bg-gray-700 hover:bg-gray-600 focus:bg-gray-700 active:bg-gray-900 focus:ring-gray-500 border-transparent',
    'outline'      => 'hover:bg-primary-700 hover:text-white border-gray-200 '
];?>

<a {{ $attributes->class([ $classes[$variant] , $large ? 'button button-lg' :'button']) }} href="{{ $href }}">
    {{ $slot }}
    @if($icon)
    <x-icon :name="$icon" class="w-4 h-4 ml-2" solid />
    @endif

</a>