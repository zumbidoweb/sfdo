@php($option=$getRecord())
<div>
    <a class=" hover:text-primary-600" href="{{ route('filament.resources.options.edit',['record'=> $option->id]) }}">
        {{ \Illuminate\Support\Str::limit($getState(), 80) }}
    </a>
</div>