<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div data-mdb-input-init class="form-outline mb-4">
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-label for="email" :value="__('Email')" />
            <x-input-error :messages="$errors->get('email')" class="form-control" />
        </div>

        <!-- Password -->
        <div data-mdb-input-init class="form-outline mb-4">
            <x-text-input id="password" class="form-contro"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-label for="password" :value="__('Password')" />
            <x-input-error :messages="$errors->get('password')" class="form-control" />
        </div>

        <!-- Remember Me -->
        <div class="row mb-4">
            <div class="col-md-6 d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check mb-3 mb-md-0">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
            </div>
        </div>
            <x-primary-button data-mdb-button-init data-mdb-ripple-init>
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
