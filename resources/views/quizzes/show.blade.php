<x-guest-layout>
    <main>
        @if($quiz->image)
        <img class="h-64 object-cover bg-center w-full parallax" src="{{ asset($quiz->image) }}" alt="" />
        @endif
        <div class="container mt-8">
            <x-breadcrumbs />
        </div>
        <x-section size="small">
            <div class="flex -mx-4">
                <div class="w-2/3 px-4">
                    <div class="bg-white p-8 rounded" data-sal="fade">
                        <div class="text-left mb-4">
                            <span class="bg-primary-100 mb-2 text-primary-800 text-xs font-medium mr-2 px-3 py-1 rounded">open</span>
                        </div>
                        <h1 class="font-serif text-primary-700 font-semibold text-5xl xl:text-6xl leading-relaxed max-w-5xl">
                            {{ $quiz->title }}
                        </h1>
                        <div class="font-medium text-xl mt-3">{{ $quiz->subtitle }}</div>

                        <div class="prose max-w-none mt-6">{!! $quiz->content !!}</div>

                        <p class="mt-6 bg-gray-50 p-4 leading-loose">
                            <strong>Starts at: </strong><time>{{ $quiz->closes_at->format('d/m/y') }}</time><br />
                            <strong>Closes at: </strong><time>{{ $quiz->closes_at->format('d/m/y') }}</time>
                        </p>

                        <x-button data-sal="zoom-in" data-sal-delay="200" class="mt-8" icon="pencil" large>Fill up
                            this quiz</x-button>
                    </div>
                </div>

                <div class="w-1/3 px-4">
                    <aside class="flex flex-col justify-between ">
                        <div class="px-4">
                            <div>
                                <nav aria-label="Main Nav" class="flex flex-col  space-y-4">
                                    @foreach ($quizzes as $item)
                                    @php($class= ($quiz->id === $item->id )? 'text-white bg-primary-600 rounded-lg border hover:border-green-200' : 'text-gray-500 rounded-lg bg-white hover:bg-primary-50 border hover:border-green-200')
                                    <a data-sal="fade" href="#" class="px-6 py-4 text-sm font-medium {{ $class }}" data-sal="fade" data-sal-delay="{{ $loop->index * 100 }}">
                                        {{ $item->title }}
                                    </a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </x-section>
    </main>
</x-guest-layout>