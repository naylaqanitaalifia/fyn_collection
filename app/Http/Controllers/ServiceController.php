<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = Service::where('service_name', 'like', '%' . $request->search_service . '%')->get();
        // ->orderBy('service_name', 'asc')
        // ->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'category_id' => 'required',
                'service_name' => 'required',
                'price' => 'required',
                'duration' => 'required',
                'desc' => 'required|string',
                'service_thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp',
                'service_thumbnail' => 'required',
                'status' => 'required',
            ],
            [
                'category_id.required' => 'Category must be filled in!',
                'service_name.required' => 'Service name must be filled in!',
                'price.required' => 'Price must be filled in!',
                'duration.required' => 'Duration must be filled in!',
                'desc.required' => 'Description must be filled in!',
                'service_thumbnail.required' => 'Thumbnail must be filled in!',
                'status.required' => 'Status must be filled in!',
            ]);
            
            // $existingService = Service::where('id', $id)->first();

            // if ($existingService) {
            //     return redirect()->back()->with('failed', 'Service already exists!');
            // }

            if ($request->has('service_thumbnail')) {
                $file = $request->file('service_thumbnail');
                $extension = $file->getClientOriginalExtension();

                $path = 'assets/images/';
                $filename = time().'.'.$extension;
                $file->move($path, $filename);
            }
    
            Service::create([
                'category_id' => $request->category_id,
                'service_name' => $request->service_name,
                'price' => $request->price,
                'duration' => $request->duration,
                'desc' => $request->desc,
                'service_thumbnail' => $path.$filename,
                'status' => $request->status,
            ]);
    
            return redirect()->back()->with('success', 'Service has been created!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        $categories = Category::where('id', $id)->first();

        // $categories = Category::all();

        return view('admin.service.edit', compact('service', 'categories'));
        // return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'service_name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'desc' => 'required|string',
            // 'service_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp',
            'status' => 'required',
        ],
        [
            'category_id.required' => 'Category must be filled in!',
            'service_name.required' => 'Service name must be filled in!',
            'price.required' => 'Price must be filled in!',
            'duration.required' => 'Duration must be filled in!',
            'desc.required' => 'Description must be filled in!',
            'service_thumbnail.required' => 'Thumbnail must be filled in!',
            'status.required' => 'Status must be filled in!',
        ]);

        $serviceBefore = Service::where('id', $id)->first();

        $process = $serviceBefore->update([
            'category_id' => $request->category_id,
            'service_name' => $request->service_name,
            'price' => $request->price,
            'duration' => $request->duration,
            'desc' => $request->desc,
            'service_thumbnail' => $request->service_thumbnail,
            'status' => $request->status,
        ]);

        if ($process) {
            return redirect()->route('service.index')->with('success', 'Service changed successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to change service');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $process = Service::where('id', $id)->delete();

        if ($process) {
            return redirect()->back()->with('success', 'Service deleted successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to delete service');
        }
    }
}
