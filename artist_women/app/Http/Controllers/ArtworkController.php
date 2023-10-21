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
        $artworks = Artwork::paginate(10);
        return view("artworks.index", compact("artworks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("artworks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Artwork::create($request->all());
        return redirect()->route("artworks.index")->with("success","Add successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        return view("artworks.show", compact("artwork"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        return view("artworks.edit", compact("artwork"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $artwork->update($request->all());
        return redirect()->route("artworks.index")->with("success","Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('artworks.index')->with("success","Delete successfully");
    }
}
