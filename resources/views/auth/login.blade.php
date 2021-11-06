<x-guest-layout>
    <x-slot name="title">Login</x-slot>

    <div class="card-header">
        <h4>Login</h4>
    </div>
    <div class="card-body">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <x-form-group>
                <div>
                    <x-label for="credential" :value="__('Username / Email')" />

                    <x-input id="email" type="text" name="credential" :value="old('credential')" required autofocus />
                </div>
            </x-form-group>

            <!-- Password -->
            <x-form-group>
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
            </x-form-group>

            <!-- Remember Me -->
            <x-form-group>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                  </div>
            </x-form-group>

            <x-form-group>
                <x-button class="btn-danger btn-lg btn-block">
                    {{ __('Daftar') }}
                </x-button>
            </x-form-group>
        </form>
    </div>
</x-guest-layout>
