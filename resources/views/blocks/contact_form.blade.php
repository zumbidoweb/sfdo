<x-section compact>
	<x-heading class="mb-12" :title="$block->title" :text="$block->text" />
	<div data-sal="slide-up" data-sal-easing="ease-out-cubic">
		<x-paper>
			@livewire('contact-form')
		</x-paper>
	</div>
</x-section>