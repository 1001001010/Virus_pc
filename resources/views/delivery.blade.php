@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/delivery.css') }}" />
    <p class="sp"> Способы доставки</p>
    <div class="onas">
        <div class="tx1">
            <p class="nas">Самовывоз:</p>
            <div class="line1"></div>
            <p class="inf1">-Забираете с Ленина 5а в день окончания <br>сборки<br>
                -Не входит подключение
            </p>
        </div>
        <div class="tx1">
            <p class="nas">Доставка:</p>
            <div class="line1"></div>
            <p class="inf1">-Доставляет мастер в течении 1-3 дней после сборки<br>
                -Подключение всей перефирии и кабель менеджмент рабочего стола
            </p>
        </div>
    </div>
@endsection
