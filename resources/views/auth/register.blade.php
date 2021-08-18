{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

{{-- <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="sidebar-toggle text-light mr-3">
        <span class="navbar-toggler-icon"></span>
    </a>

    <a class="navbar-brand" href="index.html">UNILAB</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown">
                    <img class="rounded-circle" src="imagem/unilabsimbolo.png" width="20" height="20"> &nbsp;<span
                        class="d-none d-sm-inline">Usuário</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <nav class="sidebar">
        <ul class="list-unstyled">
            <li><a href="index.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li>
                <a href="#submenu1" data-toggle="collapse">
                    <i class="fas fa-user"></i> Usuário
                </a>
                <ul id="submenu1" class="list-unstyled collapse">
                    <li><a href="listar.html"><i class="fas fa-users"></i> Usuários</a></li>
                </ul>
            </li>

            <li class="active"><a href="#"> Documentações</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
    </nav>

    <div class="content p-1">
        <div class="list-group-item">
            <div class="d-flex">
                <div class="mr-auto p-2">
                    <h2 class="display-4 titulo">Cadastrar Usuário</h2>
                </div>
                <a href="listar.html">
                    <div class="p-2">
                        <button class="btn btn-outline-info btn-sm">
                            Listar
                        </button>
                    </div>
                </a>
            </div>
            <hr>
            <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label><span class="text-danger">*</span> Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label><span class="text-danger">*</span> E-mail</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Seu melhor e-mail">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha"
                            placeholder="Senha com mínimo 8 caracteres">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirmar Senha</label>
                        <input name="conf_senha" type="password" class="form-control" id="conf_senha"
                            placeholder="Confirmar a senha">
                    </div>
                </div>

                
                <p>
                    <span class="text-danger"> * </span>Campo obrigatório
                </p>

                <div class="form-row">

                    <div class="form-group col-md-12">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkGestor">
                            <label class="form-check-label" for="checkGestor">
                                Gestor
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkBolsista">
                            <label class="form-check-label" for="checkBolsista">
                                Bolsista/Voluntário
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkOrientador">
                            <label class="form-check-label" for="checkOrientador">
                                Orientador/Coordenador
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkMembro">
                            <label class="form-check-label" for="checkMembro">
                                Membro da Comissão(CAPP)
                            </label>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div> --}}

@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

    <nav class="navbar navbar-expand navbar-dark">
        <div class="container">

            <a href="index.html">
                <img src="./imagem/logo-menor-sem-fundo.png" height="40" width="" alt="">
                <h1 style="margin-left: 10px;" class="navbar-brand">UNILAB</h1>
            </a>
        </div>
    </nav>

    <x-jet-validation-errors class="mb-4" />

    <div class="login borda_redonda">
        <div class="form">
            {{-- <form class="form-signin" method="POST" action="">
                @csrf

                <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>

                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite seu Usuário" required>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail" required>
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Digite sua senha" required>
                </div>

                <div class="form-group">
                    <label>Confirmar Senha</label>
                    <input name="password_confirmation" type="password" class="form-control" id="conf_senha"
                        placeholder="Confirmar a senha" required autocomplete="new-password">
                </div>

                <div class="form-row">

                    <div class="form-group col-md-12">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="gestor" id="checkGestor">
                            <label class="form-check-label" for="checkGestor">
                                Gestor
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="bolsista"
                                id="checkBolsista">
                            <label class="form-check-label" for="checkBolsista">
                                Bolsista/Voluntário
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="orientador"
                                id="checkOrientador">
                            <label class="form-check-label" for="checkOrientador">
                                Orientador/Coordenador
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                            <label class="form-check-label" for="checkMembro">
                                Membro da Comissão(CAPP)
                            </label>
                        </div>

                    </div>
                </div>

                <button class="btn btn-lg btn-primary" type="submit">Cadastrar</button>

                <br>
                <br>

                <a href="/login" class="stretched-link">Já Está Registrado?</a>
            </form> --}} 

            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <x-jet-label for="name" value="{{ __('Nome') }}" />
                    <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="form-group">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email"
                        :value="old('email')" required />
                </div>

                <div class="form-group">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="form-group">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                    <x-jet-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="form-row">

                    <div class="form-group col-md-12">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="gestor" id="checkGestor">
                            <label class="form-check-label" for="checkGestor">
                                Gestor
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                            <label class="form-check-label" for="checkBolsista">
                                Bolsista/Voluntário
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                            <label class="form-check-label" for="checkOrientador">
                                Orientador/Coordenador
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                            <label class="form-check-label" for="checkMembro">
                                Membro da Comissão(CAPP)
                            </label>
                        </div>

                    </div>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
                    
                    <br>
                    <br>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já Está Cadastrado?') }}
                    </a>
                </div>
            </form>
        </div>

        <img class="img-fluid login-img d-none d-md-table-cell" src="imagem/Data_security_02.jpg" alt="">
    </div>

    <div class="rodape">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Contato</h5>
                    <p>
                        (XX)XXXX-XXXX <br>
                        Redenção<br>
                        CEP 62790-000 - Redençãod/CE<br>
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h5>Redes Sociais</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twiter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
