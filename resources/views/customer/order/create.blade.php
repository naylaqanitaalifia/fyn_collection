<x-template>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="d-flex">
                        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (Session::get('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('failed'))
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    {{ Session::get('failed') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            
                            <label for="customer_id" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Customer</label>
                            <input type="text" name="customer_id" id="customer_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="1">

                            <label for="service_id" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Service</label>
                            <input type="text" name="service_id" id="service_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $service->id }}">

                            <label for="order_note" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Order Note</label>
                            <textarea name="order_note" id="order_note" cols="20" rows="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>

                            <label for="payment_proof" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Payment Proof</label>
                            <input type="file" name="payment_proof" id="payment_proof" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >

                            <label for="total_price" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Total Price</label>
                            <input type="text" name="total_price" id="total_price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $service->price }}">

                            <label for="completed_date" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Completed Date</label>
                            <input type="date" name="completed_date" id="completed_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 mt-6 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
