<h2 class="text-lg font-semibold text-green-800 mb-4">Iniciar sesión</h2>

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Correo electrónico')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Contraseña')" />
        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-700 shadow-sm focus:ring-green-600" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-green-800" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
        @endif

        <x-primary-button class="ms-3">
            {{ __('Iniciar sesión') }}
        </x-primary-button>
    </div>

    <p class="text-center text-sm text-gray-500 mt-4">
        ¿No tienes cuenta?
        <a href="{{ route('register') }}" class="text-green-700 font-medium hover:underline">Regístrate</a>
    </p>
</form>
