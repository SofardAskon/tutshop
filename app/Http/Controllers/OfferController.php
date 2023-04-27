<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.offer.index', [
            'offers' => Offer::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offer.create', [
            'offer' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer = Offer::create([
            'text' => [
                'ru' => $request->text_ru,
                'uz' => $request->text_uz,
            ]
        ]);



        return redirect()->route('offer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        return view('admin.offer.edit', [
            'offer' => $offer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update([
            'text' => [
                'ru' => $request->text_ru,
                'uz' => $request->text_uz,
            ]
        ]);

        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offer.index');
    }
}
