<header>
    <link rel="stylesheet" href="{{ asset('css/headandfoot.css') }}" />
    <div class="rectangle">
        <div class="group-1">
            <a href="{{ route('index') }}">
                <div class="virus-pc"></div>
            </a>
            <a class="delivery" href="{{ route('category', ['category_link' => 'optimal_pc']) }}">Модели</a>
            <a class="delivery" href="{{ route('delivery') }}">Доставка</a>
            <a class="cart" href="{{ route('Basket') }}">Корзина</a>
            @auth
                <a class="login-registration" href="{{ route('profile') }}">Личный кабинет</a>
            @else
                <a class="login-registration" href="{{ route('profile') }}">Вход и регистрация</a>
            @endauth
            @if (Auth::user() and Auth::user()->is_admin == 1)
                <a class="cart" href="{{ route('admin') }}">Админка</a>
            @endif
        </div>
    </div>
</header>
