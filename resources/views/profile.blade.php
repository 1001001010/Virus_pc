@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lk.css') }}" />
    <div class="main-container">
        <span class="personal-cabinet-1">Личный кабинет</span>
        <div class="rectangle1"></div>
        <div class="image"></div>
        <div class="line"></div>
        <span class="login">Логин: {{ Auth::user()->name }}</span>
        <div class="line-2"></div>
        <button onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <span class="name">Выйти</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </button>
    </div>
@endsection
