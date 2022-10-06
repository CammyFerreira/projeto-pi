@extends('layout')
@section('css')
<link rel="stylesheet" href="/css/register.css">
@endsection
@section('main')


        <div class="main-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="full-box">
                <label for="nome">Nome</label>
                <input required type="text" name="name" id="name" placeholder="Digite seu nome" data-required
                    data-min-length="3" data-max-length="16">
            </div>
            <div class="full-box">
                <label for="nome">CPF</label>
                <input required type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required
                    min-length="11" max-length="11">
            </div>
            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2"
                    data-email-validate>
            </div>
            <div class="half-box spacing">
                <label for="senha">Senha</label>
                <input required type="password" name="password" id="senha" placeholder="Digite sua senha"
                    data-password-validate data-required>
            </div>
            <div class="half-box">
                <label for="confirmacao_senha">Confirmação de senha</label>
                <input required type="password" name="password_confirmation" id="confirmacao_senha"
                    placeholder="Digite novamente sua senha" data-equal="senha">
            </div>
            <div class="flex items-center justify-end mt-4">

                <div class="full-box">
                    <input id="btn-submit" type="button" value="Possui login?" href="{{}}">
                </div>

                <div class="full-box">
                    <input id="btn-submit" type="submit" value="Registrar">
                </div>
            </div>
        </form>
</div>
@endsection
