<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function index()
    {
        /**
        * Отображение главной страницы
        *
        * Возвращаем отображение компонента welcome
        */
        return view('welcome');
    }
    public function delivery()
    {
        /**
        * Отображение главной страницы
        *
        * Возвращаем отображение компонента delivery
        */
        return view('delivery');
    }
}
