<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Category;

class CategoriesComposer
{
    public function compose(View $view)
    {
        /**
        *  Получаем список категорий для дальнейшей передачи в каждое представление
        */
        $categories = Category::get();
        $view->with('categories', $categories);
    }
}