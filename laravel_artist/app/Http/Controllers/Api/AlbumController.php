<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        $albums = $artist->albums()->paginate(5);
        return view('albums.show', compact('artist','albums'));
    }

    public function edit(Album $album) 
    {
        return view('albums.update', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'year' => 'nullable|string|max:255',
        'sales' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'name' => $validated['name'] ?? $album->name,
            'year' => $validated['year'] ?? $album->year,
            'sales' => $validated['sales'] ?? $album->sales,
        ];

        if ($request->hasFile('image')) {
       
            if ($album->image && Storage::disk('public')->exists($album->image)) {
                Storage::disk('public')->delete($album->image);
            }

            $data['image'] = $request->file('image')->store('album_covers', 'public');
        }

        $album->update($data);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('dashboard');
    }
}
