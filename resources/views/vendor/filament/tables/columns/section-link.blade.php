@php($section=$getRecord())
<div>
    <a class="hover:text-primary-600" href="{{ route('filament.resources.sections.edit',['record'=> $section->id]) }}">
        {{ \Illuminate\Support\Str::limit($getState(), 80) }}
    </a>
</div>