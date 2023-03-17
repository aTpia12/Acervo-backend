<?php

namespace App\Http\Controllers;

use App\Models\Enclosure;
use Illuminate\Http\Request;

class EnclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enclosures = Enclosure::all();

        return $enclosures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'street_number' => 'required|string',
            'colony' => 'required|string',
            'zipcode' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'director' => 'required|string'
        ]);

        $enclosure = Enclosure::create($request->all());

        return $enclosure;
    }

    /**
     * Display the specified resource.
     */
    public function show(Enclosure $enclosure)
    {
        return $enclosure;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enclosure $enclosure)
    {
        $request->validate([
            'name' => 'required|string',
            'street_number' => 'required|string',
            'colony' => 'required|string',
            'zipcode' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'director' => 'required|string'
        ]);

        $enclosure->update($request->all());

        return $enclosure;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enclosure $enclosure)
    {
        //
    }
}
