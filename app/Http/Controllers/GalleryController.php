<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\OutfitInspiration;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries = Gallery::where('title', 'like', '%' . $request->search_gallery . '%')
        ->orderBy('title', 'asc')
        ->paginate(10);
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $outfits = OutfitInspiration::all();

        return view('admin.gallery.create', compact('outfits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'outfit_id' => 'required',
            'title' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,webp',
        ], [
            'outfit_id.required' => 'Outfit id must be filled in!',
            'title.required' => 'Title must be filled in!',
            'image_path.required' => 'Image path must be filled in!',
        ]);

        // $existingGallery = Gallery::where('title', $request->title)->first();

        // if ($existingGallery) {
        //     return redirect()->back()->with('failed', 'Gallery already exists!');
        // }

        if ($request->has('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();

            $path = 'assets/images/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);
        }

        Gallery::create([
            'outfit_id' => $request->outfit_id,
            'title' => $request->title,
            'image_path' => $path.$filename,
        ]);

        return redirect()->back()->with('success', 'Gallery has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $outfits = OutfitInspiration::all();
        return view('admin.gallery.edit', compact('gallery', 'outfits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'outfit_id' => 'required',
            'title' => 'required',
            // 'image_path' => 'required',
        ], [
            'outfit_id.required' => 'Outfit id must be filled in!',
            'title.required' => 'Title must be filled in!',
            // 'image_path.required' => 'Image path must be filled in!',
        ]);

        $galleryBefore = gallery::where('id', $id)->first();

        $process = $galleryBefore->update([
            'outfit_id' => $request->outfit_id,
            'title' => $request->title,
            // 'image_path' => $request->image_path,
        ]);

        if ($process) {
            return redirect()->route('gallery.index')->with('success', 'Galley changed successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to change gallery');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $process = Gallery::where('id', $id)->delete();

        if ($process) {
            return redirect()->back()->with('success', 'Gallery deleted successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to delete gallery');
        }
    }
}
