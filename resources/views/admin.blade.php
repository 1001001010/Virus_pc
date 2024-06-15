@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <form action="{{ route('AddProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Изображение компа:</label>
        <input type="file" name="photo" required>

        <label>Название:</label>
        <input type="text" name="name" required>

        <label>Описание:</label>
        <input type="text" name="description" required>

        <label>Цена:</label>
        <input type="number" name="price" required>

        <label>Категория</label>
        <select name="category_id">
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>/

        <label>Видеокарта:</label>
        <input type="text" name="videocard" required>

        <label>Процессор:</label>
        <input type="text" name="processor" required>

        <label>Материнская плата:</label>
        <input type="text" name="motherboard" required>

        <label>Охлаждение:</label>
        <input type="text" name="cooling" required>

        <label>Оперативная память:</label>
        <input type="text" name="ram" required>

        <label>SSD накопитель:</label>
        <input type="text" name="ssd" required>

        <label>Блок питания:</label>
        <input type="text" name="power_supply" required>

        <label>Корпус:</label>
        <input type="text" name="case" required>

        <input type="submit" value="Создать">
    </form>
@endsection
