@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <div class="fon">
        <p class="reg">Вход</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="reg-item">
                <label for="name">Email</label>
                <input type="name" id="name" name="email" required>
            </div>
            <div class="reg-item">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="bt1" type="submit">Войти</button>
        </form>
    </div>
    <a class="vxod" href="{{ route('register') }}">Регистрация</a>
@endsection
