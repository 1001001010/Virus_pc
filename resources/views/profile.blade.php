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
        <span class="name">Мои заказы:</span>
    </div>
@endsection
