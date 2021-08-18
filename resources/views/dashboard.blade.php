{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>

        <a class="navbar-brand" href="#">UNILAB</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <img class="rounded-circle" src="imagem/unilabsimbolo.png" width="30" height="30"> &nbsp;<span
                            class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria+-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <form action="/logout" method="POST">
                            @csrf

                            <a 
                                class="dropdown-item" 
                                href="/logout" 
                                onclick="
                                    event.preventDefault();
                                    this.closest('form').submit();
                                ">
                                <i class="fas fa-sign-out-alt"></i>
                                Sair
                            </a>
                        </form>
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
                        <h2 class="display-4 titulo">Dashboard</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <i class="fas fa-users fa-3x"></i>
                                <h6 class="card-title">Usuários</h6>
                                <h2 class="lead">4</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <i class="fas fa-file fa-3x"></i>
                                <h6 class="card-title">Projetos</h6>
                                <h2 class="lead">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <i class="fas fa-eye fa-3x"></i>
                                <h6 class="card-title">Relatórios</h6>
                                <h2 class="lead">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <i class="fas fa-comments fa-3x"></i>
                                <h6 class="card-title">Avaliações</h6>
                                <h2 class="lead">0</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @can('add_edital', auth()->user())
        <h1>add edital</h1>
    @endcan

    @can('edit_edital', auth()->user())
        <h1>edit edital</h1>
    @endcan

    @can('rate_edital', auth()->user())
        <h1>rate edital</h1>
    @endcan

    @can('delete_edital', auth()->user())
        <h1>delete edital</h1>
    @endcan
@endsection