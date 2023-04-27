<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Filter;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;


class CommonController extends Controller
{
    public function home()
    {
        return view('home', [
            'slider' => Slider::where('type', 'slider')->get(),
            'banner' => Slider::where('type', 'banner')->get(),
            'offers' => Offer::get(),
            'products' => Product::get(),
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


        $products = $products->get();

        return view('shop', [
            'categories' => Category::get(),
            'colors' => Color::get(),
            'filters' => Filter::get(),
            'products' => $products
        ]);
    }

    public function categoryProducts($id)
    {
        // Получаем категорию по ID
        $category = Category::find($id);

        // Если категория не найдена, возвращаем 404
        if (!$category) {
            abort(404);
        }

        // Если у выбранной категории есть родительская категория,
        // то мы считаем, что выбрана подкатегория и устанавливаем родительскую категорию
        if ($category->parent_id) {
            $parentCategory = Category::find($category->parent_id);
        } else {
            $parentCategory = $category;
        }

        // Получаем продукты для заданной категории (или подкатегории)
        $products = Product::query();

        $products->whereHas('categories', function ($query) use ($id) {
            $query->whereIn('categories.id', [$id]); // явно указываем имя таблицы для столбца 'id'
        });

        $products = $products->get();

        // Получаем фильтры для родительской категории
        $filters = $parentCategory->filters;

        // Получаем все категории
        $categories = Category::all();

        // Получаем цвета
        $colors = Color::all();

        // Возвращаем представление с продуктами, фильтрами и категориями
        return view('shop', compact('products', 'filters', 'category', 'parentCategory', 'categories', 'colors'));
    }



    public function filter(Request $request)
    {
        // Получаем выбранные параметры фильтрации
        // $category = json_decode($request->input('category'));
        $categories = json_decode($request->input('categories'));
        $colors = json_decode($request->input('colors'));
        $filters = json_decode($request->input('filters'), true);

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

        if (!empty($filters)) {
            foreach ($filters as $filterId => $filterValues) {
                $productsQuery->whereHas('filters', function ($query) use ($filterId, $filterValues) {
                    $query->where('filters.id', $filterId)
                        ->whereIn('filter_product.filter_value_id', $filterValues);
                });
            }
        }
        // if (!empty($filters)) {
        //     foreach ($filters as $filterId => $filterValues) {
        //         $productsQuery->whereHas('filters', function ($query) use ($filterId, $filterValues) {
        //             $query->where('filters.id', $filterId)
        //                 ->whereIn('filter_product.filter_value_id', $filterValues);
        //         });
        //     }
        // }


        // Получаем отфильтрованные продукты
        $products = $productsQuery->get();

        // Загружаем HTML-шаблон и передаем в него отфильтрованные продукты
        $html = view('_productCard', compact('products'))->render();

        // Возвращаем HTML-шаблон в виде строки для обновления содержимого списка продуктов на странице
        return response()->json(['html' => $html, 'data' => '']);
    }

    public function product(Request $request)
    {
        return view('product', [
            'product' => Product::findOrFail($request->id)
        ]);
    }

    public function createOrder(Request $request)
    {

        // dd($request->all());

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $color = $_POST['color'];
        $url = $_POST['url'];

        $token = "5460979120:AAFnQ-wSdeNfLRi4mVlHDBOsblFEUE183mQ";
        $chat_id = "-952609477";


        $arr = array(
            '<b>Новая заявка ✅</b>' => '',
            'Имя: ' => $name,
            'Телефон: ' => $phone,
            'Цвет: ' => $color,
            'Ссылка на сам продукт: ' => $url,
        );

        $txt = '';
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

        return redirect()->back()->with('order_status', 'Ahhha');
    }

    public function search_products(Request $request)
    {
        $searchQuery = request()->input('query', '');


        $categories = Category::with('children')->where('parent_id', 0)->get();

        $products = Product::where('name', 'LIKE', '%' . $searchQuery . '%')
            ->orWhere('description', 'LIKE', '%' . $searchQuery . '%')
            ->get();

        return view('search_products', compact('products', 'categories', 'searchQuery'));
    }
}
