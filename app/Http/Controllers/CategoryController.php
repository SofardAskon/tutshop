<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create', [
            'category' => [],
            'categories' => Category::with('children')->where('parent_id', null)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Category::create([
            'title' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ]
        ]);

        // Category::create($request->except('downloads'));

        if ($request->has('downloads')) {
            $product->downloads()->attach($request->downloads);
        }

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'categories' => Category::with('children')->where('parent_id', null)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $category->update([
            'title' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ]
        ]);

        $category->downloads()->detach();
        if ($request->has('downloads')) {
            $category->downloads()->attach($request->downloads);
        }

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $category->downloads()->detach();
        return redirect()->route('category.index');
    }
}
