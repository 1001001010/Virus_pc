@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/models.css') }}" />
    <div class="main-container">
        <img class="kart" src="{{ asset('img/k5.png') }}">
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Поиск по моделям...">
            <button id="search-button">Поиск</button>
        </div>
        <div class="optimpc">

            <p class="optimal-pc">{{ $category->name }}</p>
            <div class="line"></div>
            <p class="universal-computers">Оптимальные - универсальные компьютеры, которые могут использоваться
                </br>для различных задач, включая игры, работу с документами и интернет-серфинг.</p>
        </div>
        <div class="tri">
            @foreach ($category->products as $product)
                <div class="block1">
                    <a href="tovar.html">
                        <div class="position-relative"></div>
                    </a>
                    <p class="avg-fps">AVG. FPS - 84</p>
                    <div class="product-teaser-fps-bar">
                        <div class="product-teaser-fps-bar-fill"></div>
                    </div>
                    <a class="dd" href="tovar.html">
                        <p class="pc-one" href="tovar.html">{{ $product->name }}</p>
                    </a>
                    <div class="flex-row-a">

                        <div class="stars">
                            <img class="star" src="{{ asset('img/star.png') }}">
                            <img class="star" src="{{ asset('img/star.png') }}">
                            <img class="star" src="{{ asset('img/star.png') }}">
                            <img class="star" src="{{ asset('img/star.png') }}">
                            <img class="star" src="{{ asset('img/star.png') }}">
                        </div>
                        <p class="reviews">(5 отзывов)</p>
                    </div>
                    <p class="price">Цена {{ $product->price }} ₽</p>
                    <button class="add-to-cart">

                        <div class="svg"></div>
                        <p class="in-cart">В корзину</p>
                    </button>
                    <p class="on-order">На заказ, сроки 6 - 9 дней</p>
                    <p class="gaming-platform">{{ $product->description }}</p>

                    <div class="desc1">
                        <div class="svg-1"></div>
                        <div>
                            <p class="object"> Видеокарта:</p>
                            <p class="opis">{{ $product->videocard }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-2"></div>
                        <div>
                            <p class="object"> Процессор::</p>
                            <p class="opis">{{ $product->processor }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-3"></div>
                        <div>
                            <p class="object"> Материнская плата::</p>
                            <p class="opis">{{ $product->motherboard }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-4"></div>
                        <div>
                            <p class="object"> Охлаждение:</p>
                            <p class="opis">{{ $product->cooling }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-5"></div>
                        <div>
                            <p class="object"> Оперативная память:</p>
                            <p class="opis">{{ $product->ram }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-6"></div>
                        <div>
                            <p class="object"> SSD накопитель:</p>
                            <p class="opis">{{ $product->ssd }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-7"></div>
                        <div>
                            <p class="object"> Блок питания:</p>
                            <p class="opis">{{ $product->power_supply }}</p>
                        </div>
                    </div>
                    <div class="desc1">
                        <div class="svg-8"></div>
                        <div>
                            <p class="object">Корпус:</p>
                            <p class="opis">{{ $product->case }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="optimpc">
            <p class="optimal-pc">PC ONE</p>
            <div class="line"></div>
            <p class="universal-computers">Компьютеры PC ONE предназначены для учебы, освоения новых профессий и
                современного гейминга в разрешении Full HD на высоких настройках
                графики. Call of Duty: Warzone, Atomic Heart, Hogwarts Legacy, Far Cry 6 – эти и многие другие проекты будут
                доступны с высокой и стабильной частотой кадров.</p>
        </div>
        <div class="optimpc">
            <p class="optimal-pc">PC CHAMPION</p>
            <div class="line"></div>
            <p class="universal-computers">Компьютеры PC CHAMPION – это производительные системы для учебы, работы в
                тяжелых творческих приложениях и современного гейминга на
                ультра-настройках графики в Quad HD разрешении. Cyberpunk 2077, Far Cry 6, Call of Duty: Warzone, Hogwarts
                Legacy – эти и многие другие игры будут работать с
                высокой частотой кадров даже с DXR – включенной технологией трассировки лучей.</p>
        </div>
        <div class="optimpc">
            <p class="optimal-pc">PC FURY</p>
            <div class="line"></div>
            <p class="universal-computers">Компьютеры PC FURY – это производительные системы для учебы и гейминга на
                ультра-настройках графики в разрешении Full HD. Cyberpunk 2077, Far
                Cry 6, Battlefield 2042, Hogwarts Legacy – эти и многие другие игры будут работать с высокой и стабильной
                частотой кадров даже с включенной технологией
                трассировки лучей (DXR).</p>
        </div>
    </div>
@endsection
