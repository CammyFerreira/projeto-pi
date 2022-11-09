@extends('layout')
@section('css')
<link rel="stylesheet" href="/css/register.css">
@endsection
@section('main')
        
        <a href="/" id="back">← VOLTAR PARA LOGIN</a>

        <div class="main-container">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 id="titulo">Cadastrar-se</h2>

            <div class="full-box">
                <input required type="text" name="name" id="input" placeholder="Nome" data-required
                    data-min-length="3" data-max-length="16">
            </div>
            <div class="full-box">
                <input required type="text" name="cpf" id="input" placeholder="CPF" required
                    min-length="11" max-length="11">
            </div>
            <div class="full-box">
                <input type="email" name="email" id="input" placeholder="E-mail" data-min-length="2"
                    data-email-validate>
            </div>
            <div class="half-box spacing">
                <input required type="password" name="password" id="input" placeholder="Senha"
                    data-password-validate data-required>
            </div>
            <div class="half-box">
                <input required type="password" name="password_confirmation" id="input"
                    placeholder="Digite novamente sua senha" data-equal="senha">
            </div>
            <div class="flex items-center justify-end mt-4">

            <div class="full-box">
                    <input id="btn-submit" type="submit" value="Registrar">
                </div>
            </div>
        </form>
</div>
@endsection
