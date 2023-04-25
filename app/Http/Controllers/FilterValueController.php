<?php

namespace App\Http\Controllers;

use App\Models\FilterValue;
use App\Models\Filter;
use Illuminate\Http\Request;

class FilterValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Filter $filter)

    {
        $filterValues = $filter->values;
        return view('admin.filter_values.index', compact('filter', 'filterValues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Filter $filter)
    {
        $filterValue = [];
        return view('admin.filter_values.create', compact('filter', 'filterValue'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Filter $filter)
    {
        $data = ['value' => [
            'ru' => $request->value_ru,
            'uz' => $request->value_uz,
        ]];

        $filterValue = new FilterValue($data);
        $filterValue->filter_id = $filter->id;
        $filterValue->save();

        return redirect()->route('filter.values.index', $filter);
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
    public function edit($id)
    {
        $filterValue = FilterValue::findOrFail($id);
        return view('admin.filter_values.edit', compact('filterValue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $filterValue = FilterValue::findOrFail($id);

        $data = ['value' => [
            'ru' => $request->value_ru,
            'uz' => $request->value_uz,
        ]];

        $filterValue->update($data);

        return redirect()->route('filter.values.index', ['filter' => $filterValue->filter_id]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilterValue $filterValue)
    {
        $filterId = $filterValue->filter_id;
        $filterValue->delete();

        return redirect()->route('filter.values.index', $filterId);
    }
}
