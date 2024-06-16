@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/crate.css') }}" />
    <div class="main-container">
        <div class="rectangle">
            <div class="flex-row-da">
                <span class="name">Наименование</span><span class="name-1">Наименование</span><span
                    class="quantity">Кол-во</span>

                <span class="price">Цена</span>
            </div>
            <div class="box">
                @foreach ($baskets as $item)
                    <div class="form">
                        <div class="flex-row-c">
                            <div class="div-uk-position-relative">
                                <img src="{{ asset($item->product->photo) }}" alt="">
                            </div>
                            <a href="{{ route('deleteBasket', ['position_id' => $item->id]) }}">
                                <button class="rectangle-2">
                                    <span class="delete">Удалить</span>
                                </button>
                            </a>
                            <span class="price-3">
                                <div class="number">
                                    <a a type="button"
                                        href="{{ route('EditQuantity', ['product_id' => $item->id, 'status' => 'minus']) }}"
                                        class="number-minus">-</a>
                                    <span class="number-text">{{ $item->quantity }}</span>
                                    <a type="button"
                                        href="{{ route('EditQuantity', ['product_id' => $item->id, 'status' => 'plus']) }}"
                                        class="number-plus">+</a>
                                </div>
                            </span>
                            <span class="price-4">{{ $item->product->price * $item->quantity }} руб.</span>
                            <div class="vib">
                                <input type="radio" id="delivery-courier" name="delivery" value="courier">
                                <label class="delivery-courier">Доставка курьером</label>
                                <br>
                                <input type="radio" id="delivery-self-pickup" name="delivery" value="self-pickup">
                                <label class="delivery-self-pickup">Самовывоз</label>
                            </div>
                        </div>
                        <span class="link">{{ $item->product->name }}</span>
                        <hr>
                    </div>
                @endforeach
            </div>
            <a class="oform" type="button" href="{{ route('AddOrder') }}">
                Оформить
            </a>
        </div>
    </div>
@endsection
