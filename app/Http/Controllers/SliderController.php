<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index', [
            'sliders' => Slider::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create', [
            'slider' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = Slider::create([
            'title' => [
                'ru' => $request->title_ru,
                'uz' => $request->title_uz,
            ],
            'description' => [
                'ru' => $request->description_ru,
                'uz' => $request->description_uz,
            ],
            'url' => $request->url
        ]);


        if ($request->has('downloads')) {
            $slider->downloads()->attach($request->downloads);
        }

        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', [
            'slider' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->update([
            'title' => [
                'ru' => $request->title_ru,
                'uz' => $request->title_uz,
            ],
            'description' => [
                'ru' => $request->description_ru,
                'uz' => $request->description_uz,
            ],
            'url' => $request->url
        ]);

        $slider->downloads()->detach();
        if ($request->has('downloads')) {
            $slider->downloads()->attach($request->downloads);
        }

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
