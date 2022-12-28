<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-paper>
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </x-paper>

            <x-paper>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </x-paper>

            <x-paper>
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </x-paper>
        </div>
    </div>
</x-app-layout>