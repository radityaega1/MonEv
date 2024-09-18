<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="/">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Logo Monev">
            </a>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-600 dark:text-white">Register your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('editor.register') }}">
                @csrf

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-600 dark:text-white">{{ __('Username') }}</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-600 dark:text-white">{{ __('Email Address') }}</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!--Password -->
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-600 dark:text-white">{{ __('Password') }}</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-600 dark:text-white">{{ __('Confirm Password') }}</label>
                    <div class="mt-2 mb-12">
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <p class="text-sm text-gray-500">
                    <a href="{{route('editor.login')}}" class="font-semibold text-indigo-600 hover:text-indigo-500">{{ __('Already registered?') }}</a>
                </p>

                <div>
                    <x-primary-button class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
