{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.main')

@section('title', 'Login')

@section('content')
    {{-- <form class="form-signin">
        <img class="mb-4" src="imagem/unilabsimbolo.png" alt="Celke" width="72" height="72">
        
        <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>

        <div class="form-group">
            <label>Endereço de email</label>
            <input type="text" class="form-control" placeholder="Digite o usuario">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" placeholder="Digite a Senha">
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <p class="text-center">Esqueceu a senha?</p>
    </form> --}}

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="form-group">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="form-group">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-se de mim') }}</span>
                    </label>
                </div>

                <div class="form-group">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Esqueceu Sua Senha?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
@endsection
