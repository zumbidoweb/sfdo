@php($subject=$getRecord())
<div>
    <a class=" hover:text-primary-600" href="{{ route('filament.resources.subjects.edit',['record'=> $subject->id]) }}">
        {{ \Illuminate\Support\Str::limit($getState(), 80) }}
    </a>
</div>