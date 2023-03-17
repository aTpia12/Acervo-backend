<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $authors = Author::included()
                    ->filter()
                    ->get();

        return AuthorResource::collection($authors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $author = Author::create($request->all());

        return $author;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $author = Author::included()->findOrFail($id);

        return AuthorResource::make($author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $author->update($request->all());

        return $author;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
