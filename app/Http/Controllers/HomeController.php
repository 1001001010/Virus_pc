<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function __construct()
    {
        /**
        * Проверка, что пользователь зарегистрирован 
        */
        $this->middleware('auth');
    }

    public function profile()
    {
        /**
        * Отображение страницы профиля
        *
        * Возвращаем отображение компонента profile
        */
        return view('profile');
    }
    public function category($category_link)
    {
        /**
        * Отображение страницы категорий
        *
        * Возвращаем отображение компонента category
        */
        $category = Category::with('products')->where('link', $category_link)->firstOrFail();
        return view('optimal', ['category' => $category]);
    }
}
