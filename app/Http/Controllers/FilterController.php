<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = Filter::all();
        return view('admin.filter.index', compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filter.create', [
            'filter' => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Filter::create([
            'name' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ],
        ]);

        return redirect()->route('filter.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filter $filter)
    {
        return view('admin.filter.edit', compact('filter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
        $filter->update([
            'name' => [
                'ru' => $request->name_ru,
                'uz' => $request->name_uz,
            ],
        ]);

        return redirect()->route('filter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();
        return redirect()->route('filter.index');
    }

    public function getFiltersByCategory(Category $category)
    {
        $mainCategory = $category->parent_id ? $category->parent : $category;
        $filters = $mainCategory->filters;

        return response()->json($filters);
    }
}
