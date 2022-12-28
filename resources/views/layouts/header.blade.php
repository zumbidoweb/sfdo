<header aria-label="Site Header" class="border-b bg-white border-gray-100 shadow-xl z-10 relative">

	<div class="mx-auto flex h-20 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8">

		<x-application-logo />

		<div class="flex flex-1 items-center justify-end">

			<div class="ml-8 flex items-center  divide-x">

				<a href="{{ url('/') }}" class="flex items-center space-x-2 px-8 text-gray-800 hover:text-primary-700">
					<x-icon name="home" class="w-4 h-4" solid />
					<span class="font-medium text-sm">Home</span>
				</a>

				<a href="{{ url('quizzes') }}" class="flex items-center space-x-2 px-8 text-gray-800 hover:text-primary-700">
					<x-icon name="check-circle" class="w-4 h-4" solid />
					<span class="font-medium text-sm">Quizzes</span>
				</a>

				<a href="{{ url('faq') }}" class="flex items-center space-x-2 px-8 text-gray-800 hover:text-primary-700">
					<x-icon name="question-mark-circle" class="w-4 h-4" solid />
					<span class="font-medium text-sm">FAQ</span>
				</a>

				<a href="{{ url('contact') }}" class="flex items-center space-x-2 px-8 text-gray-800 hover:text-primary-700">
					<x-icon name="chat" class="w-4 h-4" solid />
					<span class="font-medium text-sm">Contact</span>
				</a>

				<x-button href="{{ route('login') }}" variant="dark" icon="login">
					Login
				</x-button>

			</div>
		</div>
	</div>

</header>