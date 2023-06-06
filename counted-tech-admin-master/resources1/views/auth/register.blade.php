<x-guest-layout>
    <h1 class="text-center text-2xl font-bold mb-4">Hello, Welcome!</h1>
    <p class="text-gray-600 mb-8 text-center">We wish you well today to create and manage your team. Your Counted Tech Team</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Your Name')" />
            <x-input id="name" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-input id="email" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-input id="password" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mb-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
