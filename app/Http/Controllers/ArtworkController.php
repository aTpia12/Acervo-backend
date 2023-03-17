<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::all();

        return $artworks;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inventory' => 'required|unique',
            'enclosure_id' => 'required',
            'collection' => 'required|string',
            'title' => 'required'
        ]);

        $artwork = Artwork::create($request->all());

        return $artwork;
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        return $artwork;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $request->validate([
            'inventory' => 'required|unique:artworks,inventory,'.$artwork->id,
            'enclosure_id' => 'required',
            'collection' => 'required|string',
            'title' => 'required'
        ]);

        $artwork->update($request->all());

        return $artwork;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        //
    }
}
