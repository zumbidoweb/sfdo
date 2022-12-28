<div class="space-y-4 ">
    @foreach ($faqs as $faq)
    <details class="group border-l-4 border-green-500 bg-white p-6 [&_summary::-webkit-details-marker]:hidden">
        <summary class="flex items-center justify-between cursor-pointer">
            <h2 class="text-lg font-medium text-gray-900">
                {{ $faq->title }}
            </h2>
            <x-icon name="plus" class="w-6 h-6" />
        </summary>
        <div class="mt-4 prose">
            {!! $faq->content !!}
        </div>
    </details>
    @endforeach
</div>