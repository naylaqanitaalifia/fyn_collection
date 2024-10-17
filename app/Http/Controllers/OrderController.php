<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = Order::where('customer_id', 'like', '%' . $request->search_order . '%')->get();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        
        $orders = Order::all();
        $service = Service::where('id', $id)->first();
        
        return view('customer.order.create', compact('orders','service'));
        // return view('customer.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'service_id' => 'required',
            // 'status' => 'required',
            'order_note' => 'required',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,webp',
            'total_price' => 'required',
            'completed_date' => 'required',
        ], [
            'customer_id.required' => 'Customer must be filled in!',
            'service_id.required' => 'Service must be filled in!',
            // 'status.required' => 'Status must be filled in!',
            'order_note.required' => 'Note must be filled in!',
            'payment_proof.required' => 'Payment proof must be filled in!',
            'total_price.required' => 'Total price must be filled in!',
            'completed_date.required' => 'Completed date must be filled in!',
        ]);

        // $existingOrder = Order::where('id', $id)->first();

        // if ($existingOrder) {
        //     return redirect()->back()->with('failed', 'Order already exists!');
        // }

        if ($request->has('payment_proof')) {
            $file = $request->file('payment_proof');
            $extension = $file->getClientOriginalExtension();

            $path = 'assets/images/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);
        }

        Order::create([
            'customer_id' => $request->customer_id,
            'service_id' => $request->service_id,
            'order_status' => 'Pending',
            'order_note' => $request->order_note,
            'payment_proof' => $path.$filename,
            'total_price' => $request->total_price,
            'completed_date' => $request->completed_date,
        ]);


        return redirect()->back()->with('success', 'Order has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.order.edit', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'service_id' => 'required',
            // 'status' => 'required',
            'order_note' => 'required',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,webp',
            'total_price' => 'required',
            'completed_date' => 'required',
        ], [
            'customer_id.required' => 'Customer must be filled in!',
            'service_id.required' => 'Service must be filled in!',
            // 'status.required' => 'Status must be filled in!',
            'order_note.required' => 'Note must be filled in!',
            'payment_proof.required' => 'Payment proof must be filled in!',
            'total_price.required' => 'Total price must be filled in!',
            'completed_date.required' => 'Completed date must be filled in!',
        ]);

        $orderBefore = Order::where('id', $id)->first();

        $process = $orderBefore->update([
            'customer_id' => $request->customer_id,
            'service_id' => $request->service_id,
            'order_status' => 'Pending',
            'order_note' => $request->order_note,
            'payment_proof' => $request->payment_proof,
            'total_price' => $request->total_price,
            'completed_date' => $request->completed_date,
        ]);

        if ($process) {
            return redirect()->route('order.index')->with('success', 'Order changed successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed to change order');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }

    public function indexAdmin() {
        return view('admin.order.index');
    }
}
