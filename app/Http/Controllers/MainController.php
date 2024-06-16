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
    public function search($category_id, Request $request)
    {
        /**
        * Поиск по слову (HTTP-запос)
        *
        * Возвращаем отображение компонента category с результатами поиска
        */
        $word = $request->word;
        $category = Category::find($category_id);
        $result = Product::where('category_id', $category_id)->where('name', 'like', "%{$word}%")->orderBy('id')->get();
        return view('search', ['category' => $category, 'result' => $result]);
    }
}
