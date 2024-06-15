<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
    public function product($product_id)
    {
    /**
    * Отображение страницы продукта(Айди категории и айди продукта)
    *
    * Возвращаем отображение компонента delivery
    */
        $product = Product::findorFail($product_id);
        return view('product', ['product' => $product]);
    }
}
