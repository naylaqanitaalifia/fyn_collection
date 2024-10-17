<?php

namespace App\Http\Controllers;

use App\Models\OutfitInspiration;
use Illuminate\Http\Request;

class OutfitInspirationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $outfits = OutfitInspiration::where('title', 'like', '%' . $request->search_outfit . '%')
        // $outfits = OutfitInspiration::all()
        ->orderBy('title', 'asc')
        ->paginate(10);
        return view('admin.outfit-inspiration.index', compact('outfits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $outfits = OutfitInspiration::all();

        return view('admin.outfit-inspiration.create', compact('outfits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'status' => 'required',
        ], [
            'title.required' => 'Title must be filled in!',
            'desc.required' => 'Description must be filled in!',
            'status.required' => 'Status must be filled in!',
        ]);
    
        OutfitInspiration::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'status' => $request->status,
        ]);
    
        return redirect()->back()->with('success', 'Outfit inspiration has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OutfitInspiration $outfitInspiration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $outfits = OutfitInspiration::where('id', $id)->first();
        return view('admin.outfit-inspiration.edit', compact('outfits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'status' => 'required',
        ], [
            'title.required' => 'Title must be filled in',
            'desc.required' => 'Description must be filled in',
            'status.required' => 'Status must be filled in',
        ]);

        $outfitInspirationBefore = OutfitInspiration::where('id', $id)->first();

        $process = $outfitInspirationBefore->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'status' => $request->status,
        ]);

        if ($process) {
            return redirect()->route('outfit-inspiration.index')->with('success', 'Category changed successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to change category');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $process = OutfitInspiration::where('id', $id)->delete();

        if ($process) {
            return redirect()->back()->with('success', 'Outfit inspiration deleted successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to delete outfit inspiration');
        }
    }
}
