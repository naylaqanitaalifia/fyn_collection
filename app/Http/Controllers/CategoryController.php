<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::where('name', 'like', '%' . $request->search_category . '%')
        ->orderBy('name', 'asc')
        ->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Name must be filled in!'
        ]);

        $existingCategory = Category::where('name', $request->name)->first();

        if ($existingCategory) {
            return redirect()->back()->with('failed', 'Category already exists!');
        }

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Category has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Name must be filled in'
        ]);

        $categoryBefore = Category::where('id', $id)->first();

        $process = $categoryBefore->update([
            'name' => $request->name,
        ]);

        if ($process) {
            return redirect()->route('category.index')->with('success', 'Category changed successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to change category');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $process = Category::where('id', $id)->delete();

        if ($process) {
            return redirect()->back()->with('success', 'Category deleted successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to delete category');
        }
    }
}
