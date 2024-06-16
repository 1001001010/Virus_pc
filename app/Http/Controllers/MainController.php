<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Basket;
use Auth;
use DB;

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
        $status = Basket::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
        return view('product', ['product' => $product, 'basket' => $status]);
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
    public function add_basket($tovar_id)
    {
        $status = Basket::where('user_id', Auth::user()->id)->where('product_id', $tovar_id)->first();
        if ($status) {
            Basket::where('id', $status->id)->delete();
        }
        else {
            $data = [
                'user_id' => Auth::user()->id,
                'product_id' => $tovar_id,
                'quantity' => 1
            ];
            Basket::create($data);
        }
        return redirect()->back();
    }
    public function basket_open()
    {
        $baskets = Basket::where('user_id', Auth::user()->id)
            ->with('product') // eager load the product relationship
            ->get();
        return view('basket', ['baskets' => $baskets]);
    }
    public function edit_quatity($product_id, $status)
    {
        if ($status == 'plus') {
            Basket::where('id', $product_id)->update(['quantity' => DB::raw('quantity + 1')]);
        } elseif ($status == 'minus') {
            $basket = Basket::find($product_id);
            if ($basket->quantity > 1) {
                Basket::where('id', $product_id)->update(['quantity' => DB::raw('quantity - 1')]);
            }
        }
        return redirect(route('Basket'));
    }
    public function delete_basket($position_id) {
        Basket::where('id', $position_id)->delete();
        return redirect(route('Basket'));
    }
}
