@props(['variant' => 'default','size' => 'medium', 'compact' => false])
<?php 
$classes = [
	 	'default'	=> '',
    'primary'   => 'bg-primary-900 prose-dark',
    'dark'      => 'bg-gray-900 prose-dark'
];
$sizes = [
	 	'medium'	=> 'py-16',
    'small'   => 'py-8',
    'large'      => 'py-32'
];
?>

<section {{ $attributes->class([$sizes[$size],  $classes[$variant] ]) }}>
	<div class="container {{ $compact ? 'max-w-4xl mx-auto' : '' }}">
		{{ $slot }}
	</div>
</section>