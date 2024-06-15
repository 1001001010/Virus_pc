@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="fon">
            <p class="reg">Регистрация</p>
            <form action="{{ route('register') }}" method="post">
                <div class="reg-item">
                    <label for="name">Логин (мин 3 символа)*</label>
                    <input type="text" name="name" required>
                </div>
                <div class="reg-item">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="reg-item">
                    <label for="phone">Телефон*</label>
                    <input type="tel" name="phone" required>
                </div>
                <div class="reg-item">
                    <label for="password">Пароль*</label>
                    <input type="password" name="password" required>
                </div>
                <div class="reg-item">
                    <label for="confirm_password">Поддверждение пароля*</label>
                    <input type="password" name="confirm_password" required>
                </div>
                <button class="bt1" type="submit">Зарегистрироваться</button>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
        <a class="vxod" href="{{ route('login') }}">Вход</a>
    </form>
@endsection
