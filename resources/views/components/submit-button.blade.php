@props([
'variant' => 'dark',
'icon'=>'' ,
'large' => false
])

<?php 
$classes = [
    'primary'   => '!text-white bg-primary-600 hover:bg-primary-700 focus:bg-gray-600 active:bg-primary-800 focus:ring-primary-500',
    'dark'      => '!text-white bg-gray-700 hover:bg-gray-600 focus:bg-gray-700 active:bg-gray-900 focus:ring-gray-500 border-transparent',
    'danger'      => '!text-white bg-red-700 hover:bg-red-600 focus:bg-red-700 active:bg-red-900 focus:ring-red-500 border-transparent',
    'outline'      => 'hover:bg-primary-700 hover:text-white border-gray-200 '
];?>


<button {{ $attributes->class([ $classes[$variant] , $large ? 'button button-lg' :'button']) }}>
    {{ $slot }}
</button>