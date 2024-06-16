@extends('layouts.app')

@section('content')
    <div class="fon">
        <img class="kart" src="img/k1.png">
        <div class="text1">
            <p>Создаём компьютеры, которые будут дарить геймерам<br> и творческим профессионалам удовольствие от
                использования</p>
        </div>
        <div class="tovar" id="model">
            <div class="kart-tovar1">
                <button class="bt1"
                    onclick="window.location.href='{{ route('category', ['category_link' => 'optimal_pc']) }}'">Подробнее</button>
            </div>
            <div class="kart-tovar2">
                <button class="bt1"
                    onclick="window.location.href='{{ route('category', ['category_link' => 'powerful_pc']) }}'">Подробнее</button>
            </div>
            <div class="kart-tovar3">
                <button class="bt1"
                    onclick="window.location.href='{{ route('category', ['category_link' => 'custom_pc']) }}'">Подробнее</button>
            </div>
        </div>
        <div class="onas">

            <div class="tx1">
                <p class="nas">О нас:</p>
                <div class="line1"></div>
                <p class="inf1">-Больше 10 лет на рынке<br>
                    -Более 2-х тысяч проданных сборок<br>
                    -Сотрудничество с крупными компаниями<br>
                    -Классифицированные сотрудники</p>
            </div>
            <div class="tx1">
                <p class="nas">Почему мы?</p>
                <div class="line1"></div>
                <p class="inf1">-Официальные партнеры NVIDIA, Intel и Microsoft<br>
                    -Только лучшие комплектующие и передовые технологии<br>
                    -Профессиональная сборка<br>
                    -Доставка, установка и настройка компьютера под ключ<br>
                    -Собственное производство
                </p>

            </div>

        </div>
        <a class="txt">Подобрать компьютер</a>
        <div class="text2">
            <a href="models.html">
                <div class="mos" href="models.html"></div>
            </a>
            <a href="models.html">

                <div class="opt" href="models.html"></div>
            </a>
        </div>
        <p class="txt1">Процесс сборки и настройки
            <br>ваших ПК
        </p>
        <div class="rab">
            <img class="k2" src="{{ asset('img/k2.png') }}">
            <img class="k3" src="{{ asset('img/k3.png') }}">
            <img class="k4" src="{{ asset('img/k4.png') }}">
        </div>
        <p class="ot">Отызывы наших клиентов</p>
        <div class="otzv">

            <a class="text3">95%</a>
            <div class="ot1">
                <div>
                    <img class="star" src="{{ asset('img/star.png') }}">
                    <img class="star" src="{{ asset('img/star.png') }}">
                    <img class="star" src="{{ asset('img/star.png') }}">
                    <img class="star" src="{{ asset('img/star.png') }}">
                    <img class="star" src="{{ asset('img/star.png') }}">
                </div>
                <a class="txt4">95% покупателей<br>
                    купили бы здесь снова</a>
            </div>
            <div class="ot2">
                <a class="txt5">2357</a>
                <a class="txt6">Положительных оценок<br>
                    за все время работы</a>
            </div>
            <div class="ot3">
                <a class="txt7">5.0</a>
                <a class="txt8">Общий рейтинг<br> магазина за<br>
                    последние 3 месяца</a>
            </div>
        </div>
    </div>
@endsection
