<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use League\Flysystem\StorageAttributes;


class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file->store('uploads', 'public');
        $download = Download::create([
            'title' => $request->title,
            'path' => $path,
            'mime' => $request->file->getMimeType(),
            'size' => $request->file->getSize()
        ]);
        return $download->id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        if (!\Storage::disk('public')->delete($download->path)) {
            return;
        }

        if ($download->delete()) {
            return ['result' => true];
        }
    }
}
