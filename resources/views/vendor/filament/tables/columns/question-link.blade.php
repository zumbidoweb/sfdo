@php($question=$getRecord())
<div>
    <a class="  hover:text-primary-600" href="{{ route('filament.resources.questions.edit',['record'=> $question->id]) }}">
        {{ \Illuminate\Support\Str::limit($getState(), 80) }}
    </a>
</div>