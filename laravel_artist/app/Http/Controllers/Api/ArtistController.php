<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $query = Artist::with('albums');

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $artists = $query->paginate(9);

    $topArtist = $artists->sortByDesc(fn($a) => $a->albums->sum('sales'))->first();

    return view('dashboard', [
        'artists' => $artists,
        'topArtist' => $topArtist,
    ]);
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
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist) {
        return view('artists.update', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $validated = $request->validate([
            'code' => 'string|max:4',
            'name' => 'string|max:255',
        ]);

        $data = [
            'code' => $validated['code'] ?? $artist->code,
            'name' => $validated['name'] ?? $artist->name
        ];

        $artist->update($data);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist) 
    {
        $artist->delete();

        return redirect()->route('dashboard');
    }
}
