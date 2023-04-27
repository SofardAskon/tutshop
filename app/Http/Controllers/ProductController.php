<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Filter;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', [
            'product' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'colors' => Color::get(),
            'filters' => Filter::with('values')->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_uz' => 'required|string|max:255',
            'price' => 'numeric|min:0'
        ]);

        $product = Product::create([
            'name' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ],
            'characteristics' => [
                'ru' => $request->characteristics_ru,
                'uz' => $request->characteristics_uz,
            ],
            'description' => [
                'ru' => $request->description_ru,
                'uz' => $request->description_uz,
            ],
            'video' => $request->video,
            'price' => $request->price,
            'old_price' => $request->old_price,
        ]);

        if ($request->has('categories')) {
            $product->categories()->attach($request->input('categories'));
        }

        if ($request->has('colors')) {
            $product->colors()->sync($request->colors);
        }

        if ($request->has('categories')) {
            $product->downloads()->attach($request->downloads);
        }

        $filters = Filter::all();

        foreach ($filters as $filter) {
            $filterValueId = $request->input('filter_' . $filter->id);
            if ($filterValueId) {
                $product->filters()->attach($filter->id, ['filter_value_id' => $filterValueId]);
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // dd(json_encode($product->getTranslations('characteristics')));
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'colors' => Color::get(),
            'filters' => Filter::with('values')->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $ruCharacteristics = array_combine(
            $request->input('characteristics_ru'),
            $request->input('characteristics_ru_value')
        );

        $uzCharacteristics = array_combine(
            $request->input('characteristics_uz'),
            $request->input('characteristics_uz_value')
        );

        // $result = [
        //     'ru' => $ruCharacteristics,
        //     'uz' => $uzCharacteristics
        // ];

        $product->update([
            'name' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ],
            'characteristics' => [
                'ru' => $ruCharacteristics,
                'uz' => $uzCharacteristics,
            ],
            'description' => [
                'ru' => $request->description_ru,
                'uz' => $request->description_uz,
            ],
            'video' => $request->video,
            'price' => $request->price,
            'old_price' => $request->old_price,
        ]);


        $product->categories()->detach();

        if ($request->has('categories')) {
            $product->categories()->attach($request->input('categories'));
        }

        $product->colors()->detach();
        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        $product->downloads()->detach();
        if ($request->has('downloads')) {
            $product->downloads()->attach($request->downloads);
        }

        $product->filters()->detach();
        $filters = Filter::all();

        foreach ($filters as $filter) {
            $filterValueId = $request->input('filter_' . $filter->id);
            if ($filterValueId) {
                $product->filters()->attach($filter->id, ['filter_value_id' => $filterValueId]);
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->colors()->detach();
        $product->filters()->detach();
        $product->categories()->detach();
        $product->downloads()->detach();
        $product->delete();

        return redirect()->route('product.index');
    }
}
