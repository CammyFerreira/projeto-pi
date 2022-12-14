@extends('layout')
@section('css')
<link rel="stylesheet" href="/css/register.css">
@endsection
@section('main')
        <div class="main-container">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 id="titulo">Login</h2>

            <div class="full-box">
                <input required type="email" name="name" id="input" placeholder="E-mail" data-required
                    data-min-length="3" data-max-length="50">
            </div>
            <div class="full-box">
                <input required type="password" name="password" id="input" placeholder="Senha" required
                    min-length="11" max-length="11">
            </div>

            <div class="flex items-center justify-end mt-4">

            <div class="full-box">
                    <input id="btn-submit" type="submit" value="Entrar">
                </div>

                <div class="sign_up">
                    <p><u>Novo por aqui?</u><a href="{{route('register')}}"> Cadastre-se</a></p>
                </div>
            </div>
        </form>
</div>
@endsection

<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img  src="/img/logo.png" alt="">
            </a>
        </div>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login_body">
        <div class="login_box">
            <h2>Entrar</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input_box">
                    <x-input-label for="email" :value="__('Email')" />
                    <input required type="email" placeholder="Email ou número de telefone" id="email" name="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="input_box">
                    <x-input-label for="password" :value="__('Password')" />
                    <input required autocomplete="current-password" type="password" placeholder="Senha" id="email" name="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>

                <div>
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </div>

        <div class="login_footer">
            <div class="sign_up">
                <p>Novo por aqui? <a href="{{route('register')}}">Cadastre-se.</a></p>
            </div>

            <div class="terms">
                <p>Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="#">Saiba mais</a></p>
            </div>

                  Remember Me
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
        </div>
    </div>
</body>

</html>-->
