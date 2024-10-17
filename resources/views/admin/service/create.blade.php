<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>

    @section('page-title', 'Create Service')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="d-flex">
                        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
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

                            <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                            <select name="category_id" id="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <label for="service_name" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Name</label>
                            <input type="text" name="service_name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                            <label for="price" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Price</label> 
                            <input type="number" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                            <label for="desc" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Description</label>
                            <textarea name="desc" id="desc" cols="20" rows="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>

                            <label for="duration" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Duration</label>
                            <select name="duration" id="duration" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a duration</option>
                                <option value="Under 1 month">Under 1 month</option>
                                <option value="1-3 months">1-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="More than 6 months">Than 6 month</option>
                            </select>

                            <label for="service_thumbnail" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Thumbnail</label>
                            <input type="file" name="service_thumbnail" id="service_thumbnail">

                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a status</option>
                                <option value="Active">Active</option>
                                <option value="Unactive">Unactive</option>
                            </select>

                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 mt-6 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
