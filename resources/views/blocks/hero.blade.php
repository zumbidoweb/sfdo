<x-section>
  <div class="lg:flex items-center py-8 -mx-8">
    <div class="xl:flex justify-center lg:w-1/2 px-8">
      <img src="{{  $block->image }}" alt="{{ $block->title }}" />
    </div>
    <div class="lg:w-1/2 px-8">
      <h2 class="text-3xl font-bold font-serif tracking-tight text-gray-800 xl:text-4xl dark:text-white">
        {{ $block->title }}
      </h2>
      <div class="block mt-4 text-gray-700 content">
        {!! $block->text !!}
      </div>
      <x-button class="mt-4">view more</x-button>
    </div>
  </div>
</x-section>