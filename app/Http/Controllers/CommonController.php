<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Slider;
use Illuminate\Http\Request;


class CommonController extends Controller
{
    public function home()
    {
        return view('home', [
            'slider' => Slider::get(),
        ]);
    }

    public function shop(Request $request)
    {
        $products = Product::query();

        if ($request->has('categories') && $request->categories !== null) {
            $categories = explode(',', $request->categories);
            $products->whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('categories.id', [$categories]); // явно указываем имя таблицы для столбца 'id'
            });
        }

        if ($request->has('colors') && $request->colors !== null) {
            $colors = explode(',', $request->colors);
            $products->whereHas('colors', function ($query) use ($colors) {
                $query->whereIn('colors.id', $colors); // явно указываем имя таблицы для столбца 'id'
            });
        }

        if ($request->has('sizes') && $request->sizes !== null) {
            $sizes = explode(',', $request->sizes);
            $products->whereHas('sizes', function ($query) use ($sizes) {
                $query->whereIn('sizes.id', $sizes); // явно указываем имя таблицы для столбца 'id'
            });
        }

        $products = $products->get();

        return view('shop', [
            'categories' => Category::get(),
            'sizes' => Size::get(),
            'colors' => Color::get(),
            'products' => $products
        ]);
    }

    public function filter(Request $request)
    {
        // Получаем выбранные параметры фильтрации
        // $category = json_decode($request->input('category'));
        $categories = json_decode($request->input('categories'));
        $sizes = json_decode($request->input('sizes'));
        $colors = json_decode($request->input('colors'));

        // Создаем новый экземпляр запроса к модели Product
        $productsQuery = Product::query();

        if (!empty($categories)) {
            $productsQuery->whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('categories.id', [$categories]); // явно указываем имя таблицы для столбца 'id'
            });
        }

        if (!empty($colors)) {
            $productsQuery->whereHas('colors', function ($query) use ($colors) {
                $query->whereIn('colors.id', $colors); // явно указываем имя таблицы для столбца 'id'
            });
        }

        if (!empty($sizes)) {
            $productsQuery->whereHas('sizes', function ($query) use ($sizes) {
                $query->whereIn('sizes.id', $sizes); // явно указываем имя таблицы для столбца 'id'
            });
        }



        // Получаем отфильтрованные продукты
        $products = $productsQuery->get();

        // Загружаем HTML-шаблон и передаем в него отфильтрованные продукты
        $html = view('_productCard', compact('products'))->render();

        // Возвращаем HTML-шаблон в виде строки для обновления содержимого списка продуктов на странице
        return response()->json(['html' => $html, 'data' => $sizes]);
    }

    public function product(Request $request)
    {
        return view('product', [
            'product' => Product::findOrFail($request->id)
        ]);
    }
}
