<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form
        class="w-full max-w-sm space-y-8"
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf
        <h3 class="text-lg/7 font-semibold tracking-[-0.015em] text-zinc-950 sm:text-base/7 dark:text-white">
            {{ __('Sign In') }}
        </h3>
        <fieldset class="[&>*+[data-slot=control]]:mt-6 [&>[data-slot=text]]:mt-1">
            <div class="space-y-8">
                <x-text-input id="email"  name="email" label="Email" required/>
                <x-text-input id="password"  name="password" type="password" label="Password" required />
            </div>
        </fieldset>

        <div class="flex flex-wrap justify-between gap-2">
            <x-switch id="remember_me" name="remember" label="Remember me"  />
            <p class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">
                <a href="#"
                   class="font-semibold text-zinc-950 hover:text-zinc-700 dark:text-white dark:hover:text-zinc-300">
                    Forgot password?
                </a>
            </p>
        </div>

        <x-primary-button type="submit" class="w-full">
            Sign in
        </x-primary-button>

        <p class="text-base/6 text-zinc-500 sm:text-sm/6 dark:text-zinc-400">
            Don’t have an account?<!-- -->
            <a href="{{ route('register') }}" class="font-semibold text-zinc-950 hover:text-zinc-700 dark:text-white dark:hover:text-zinc-300">
                Sign Up
            </a>
        </p>
    </form>
</x-guest-layout>
