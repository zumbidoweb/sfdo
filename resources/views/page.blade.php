<x-guest-layout>
  <main class="relative z-0">
    @if($page->content)
    @foreach ($page->content as $block)
    @include('blocks.'.$block['type'],[ 'block' => json_decode(json_encode($block['data'])) ])
    @endforeach
    @endif
  </main>
</x-guest-layout>