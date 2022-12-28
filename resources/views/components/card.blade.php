@props(['href'=>'','image'=> '','title'=>'','description'=>''])

<article class="flex bg-white transition ">
  <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
    <time
      datetime="2022-10-10"
      class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
      <span>2022</span>
      <span class="w-px flex-1 bg-gray-900/10"></span>
      <span>Oct 10</span>
    </time>
  </div>
  @if($image)
  <div class="hidden sm:block sm:basis-1/3">
    <img src="{{ asset($image) }}" class="aspect-video h-full w-full object-cover" />
  </div>
  @endif

  <div class="flex flex-1 flex-col justify-between">
    <div class="p-4 sm:p-8">
      <div class="text-left mb-4">
        <span class="bg-primary-100 mb-2 text-primary-800 text-xs font-medium mr-2 px-3 py-1 rounded">open</span>
      </div>
      <div class="max-w-4xl">
        <a href="#">
          <h3 class="font-bold text-4xl text-primary-700 hover:text-primary-800"> {{ $title }} </h3>
        </a>
        <p class="mt-2  leading-relaxed text-gray-900 line-clamp-3">{{ $description }}</p>
      </div>

      <div class="flex space-x-4">
        <x-button :href="$href" variant="primary" class="mt-4">Participate in</x-button>
        <x-button :href="$href" variant="outline" class="mt-4">View more</x-button>
      </div>
    </div>

  </div>
</article>