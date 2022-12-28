<x-section size="large">
	<x-heading :title="$block->title" :text="$block->text" />
	<div class="max-w-xl" data-sal="fade" data-sal-delay="200">
		<x-input right-icon="search" placeholder="Filter results" />
	</div>
	<div class="mt-16">
		@livewire('show-quizzes')
	</div>
</x-section>