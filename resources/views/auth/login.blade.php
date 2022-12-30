<x-app-layout title="{{ __('Masuk') }}">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-6">
            <div class="text-center">
                <button type="button" x-on:click="window.location.href='{{ route('index') }}'">
                    <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="logo">
                </button>
                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mt-4">
                    {{ __('Masuk') }}
                </h2>
                <p class="mt-2 mb-6 text-center text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Langkah ini diperlukan sebelum akses aplikasi') }}
                </p>
            </div>

            <x-alert />

            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="post" x-data="{ isLoading: false, input: 'password' }"
                x-on:submit="isLoading = true">
                @csrf
                <div>
                    <x-form-label for="email">
                        {{ __('Email') }}
                    </x-form-label>
                    <x-form-input type="email" name="email" id="email"
                        placeholder="{{ __('Masukkan alamat email Anda') }}"
                        value="{{ old('email') ?? request()->get('email') }}" required />
                </div>
                <div>
                    <x-form-label for="password">
                        {{ __('Kata Sandi') }}
                    </x-form-label>
                    <x-form-input bind-type="input" type="password" name="password" id="password"
                        placeholder="{{ __('Masukkan kata sandi Anda') }}" required />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox"
                            class="h-4 w-4 text-primary border-gray-300 rounded focus:ring-0 bg-white dark:bg-dark-secondary dark:border-dark-tersier">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-white">
                            {{ __('Ingat saya') }}
                        </label>
                    </div>
                    <x-anchor href="#" class="text-sm" target="_blank">
                        {{ __('Lupa kata sandi?') }}
                    </x-anchor>
                </div>
                <x-button type="submit" class="w-full button-primary" disabled="isLoading">
                    <span x-text="isLoading ? '{{ __('Memproses...') }}' : '{{ __('Selanjutnya') }}'"><span>
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
