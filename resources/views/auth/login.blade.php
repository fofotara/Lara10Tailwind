<x-guest-layout>
    <div class="max-w-sm mx-auto px-4 py-8">

        <h1 class="text-3xl text-slate-800 font-bold mb-6">Welcome back! ✨</h1>
        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="flex items-center justify-between mt-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
        <!-- Footer -->
        <div class="pt-5 mt-6 border-t border-slate-200">

            <!-- Warning -->
            <div class="mt-5">
                <div class="bg-amber-100 text-amber-600 px-3 py-2 rounded">

                    <span class="text-sm">
                                        To support you during the pandemic super pro features are free until March 31st.
                                    </span>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
