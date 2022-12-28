<div>
    @forelse ($quizzes as $quiz)
    <div data-sal="slide-up" data-sal-easing="ease-out">
        <x-card
            :title="$quiz->title"
            :description="$quiz->description"
            :image="$quiz->image"
            :href="route('quiz',['id'=>$quiz->id])" />
    </div>
    @empty
    <p>Not any quiz open at the moment.</p>
    @endforelse
</div>