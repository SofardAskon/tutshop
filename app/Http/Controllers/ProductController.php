<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'product' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'colors' => Color::get(),
            'sizes' => Size::get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->except('categories', 'downloads', 'files', 'colors', 'sizes'));

        if ($request->has('categories')) {
            $product->categories()->attach($request->input('categories'));
        }

        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        if ($request->has('sizes')) {
            $product->colors()->attach($request->sizes);
        }

        if ($request->has('categories')) {
            $product->downloads()->attach($request->downloads);
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
        return view('product.edit', [
            'product' => $product,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'colors' => Color::get(),
            'sizes' => Size::get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->update($request->except('categories', 'downloads', 'files', 'colors', 'sizes'));

        $product->categories()->detach();

        if ($request->has('categories')) {
            $product->categories()->attach($request->input('categories'));
        }

        $product->colors()->detach();
        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        $product->sizes()->detach();
        if ($request->has('sizes')) {
            $product->sizes()->attach($request->sizes);
        }

        $product->downloads()->detach();
        if ($request->has('categories')) {
            $product->downloads()->attach($request->downloads);
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->downloads()->detach();
        $product->delete();

        return redirect()->route('product.index');
    }
}
