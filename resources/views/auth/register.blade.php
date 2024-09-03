<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form
        class="w-full max-w-sm space-y-8"
        method="POST"
        action="{{ route('register') }}"
    >
        @csrf
        <h3 class="text-lg/7 font-semibold tracking-[-0.015em] text-zinc-950 sm:text-base/7 dark:text-white">
            {{ __('Sign Up') }}
        </h3>
        <fieldset class="[&>*+[data-slot=control]]:mt-6 [&>[data-slot=text]]:mt-1">
            <div class="space-y-4">
                <x-text-input id="name"  name="name" label="Name" required/>
                <x-text-input id="email"  name="email" label="Email" required/>
                <x-text-input id="password"  name="password" type="password" label="Password" required />
                <x-text-input id="password_confirmation"  name="password_confirmation" type="password" label="Confirm Password" required />
            </div>
        </fieldset>

        <x-primary-button type="submit" class="w-full">
            Register
        </x-primary-button>

        <p class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">
            Don’t have an account?<!-- -->
            <a href="{{ route('login') }}" class="font-semibold text-zinc-950 hover:text-zinc-700 dark:text-white dark:hover:text-zinc-300">
                Sign In
            </a>
        </p>
    </form>
</x-guest-layout>
