<div {{ $attributes->merge(['class' => '']) }}>
	@if($title)
	<h2 class="text-primary-600 font-semibold font-serif text-7xl" data-sal="slide-left" data-sal-easing="ease-out-cubic">
		{{ $title }}
	</h2>
	@endif
	@if($text)
	<div class="max-w-4xl my-6 ml-1 leading-relaxed" data-sal="fade" data-sal-delay="150">
		{!! $text !!}
	</div>
	@endif
</div>