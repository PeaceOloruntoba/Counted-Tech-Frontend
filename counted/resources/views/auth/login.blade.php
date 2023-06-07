 <x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1 class="text-center text-2xl font-bold mb-4">Welcome Again!</h1>
    <p class="text-gray-600 mb-8 text-center">We wish you well today to manage your team. Your Counted Tech Team</p>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Your E-Mail')" />
            <x-text-input id="email" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Your Password')" />

            <x-text-input id="password" class="px-4 py-3 rounded-lg border border-gray-300 w-full focus:outline-none focus:border-blue-500" type="password" name="password" required autocomplete="current-password" />
            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mb-6">
            <a href="{{ route('register') }}" class="text-blue-500 text-sm">{{ __('Don\'t have an account?') }}</a>
            <a href="{{ route('password.request') }}" class="text-sm text-blue-500">{{ __('Forgot Password?') }}</a>
        </div>

        <div class="flex items-center justify-center">
            <button class="bg-blue-600 text-white rounded-lg w-full h-10">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</x-guest-layout>
