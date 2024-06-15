<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        /**
        * Отображение страницы администратора
        *
        * Возвращаем отображение компонента admin
        */
        return view('admin');
    }
    public function new_product(Request $request)
    {
        /**
        * Добавление нового компьютера (HTTP Запрос)
        *
        * Добавление нового товара
        *
        * return предыдущая страница
        */
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'category_id' => 'required|integer',
            'videocard' => 'required|string',
            'processor' => 'required|string',
            'motherboard' => 'required|string',
            'cooling' => 'required|string',
            'ram' => 'required|string',
            'ssd' => 'required|string',
            'power_supply' => 'required|string',
            'case' => 'required|string',
        ]);

        $name = time(). ".". $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'photo' => 'torage/products/'. $name,
            'videocard' => $request->videocard,
            'processor' => $request->processor,
            'motherboard' => $request->motherboard,
            'cooling' => $request->cooling,
            'ram' => $request->ram,
            'ssd' => $request->ssd,
            'power_supply' => $request->power_supply,
            'case' => $request->case,
        ];
        Product::create($data);

        return redirect()->back();
    }
}
