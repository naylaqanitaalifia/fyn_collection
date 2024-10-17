<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    @section('page-title', 'Edit Service')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="d-flex">
                        <form action="{{ route('service.update', $service['id']) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            @if (Session::get('success'))
                                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-lg shadow-md" role="alert">
                                    <strong class="font-bold">Success!</strong>
                                    <span class="block sm:inline">{{ Session::get('success') }}</span>
                                </div>
                            @endif

                            @if (Session::get('failed'))
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-lg shadow-md" role="alert">
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ Session::get('failed') }}</span>
                                </div>
                            @endif

                            
                            <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                            <select name="category_id" id="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a category</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach --}}
                                {{-- @foreach ($categories as $category)
                                    @if($category['category_id'] == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach --}}
                            </select>
                            @error('category_id')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="service_name" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Name</label>
                            <input type="text" name="service_name" id="service_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $service['service_name'] }}">
                            @error('service_name')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="price" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Price</label>
                            <input type="text" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ number_format($service['price'], 0, ',', '.') }}">
                            @error('price')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="desc" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Description</label>
                            <input type="text" name="desc" id="desc" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $service['desc'] }}">
                            @error('desc')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="duration" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Duration</label>
                            <select name="duration" id="duration" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a duration</option>
                                <option value="Under 1 month" {{ $service['duration'] == 'Under 1 month' ? 'selected' : '' }}>Under 1 month</option>
                                <option value="1-3 months" {{ $service['duration'] == '1-3 months' ? 'selected' : '' }}>1-3 months</option>
                                <option value="3-6 months" {{ $service['duration'] == '3-6 months' ? 'selected' : '' }}>3-6 months</option>
                                <option value="More than 6 months" {{ $service['duration'] == 'More than 6 months' ? 'selected' : '' }}>More than 6 month</option>
                            </select>
                            @error('duration')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="thumbnail" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $service['thumbnail'] }}">
                            @error('thumbnail')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a status</option>
                                <option value="Active" {{ $service['status'] == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Unactive" {{ $service['status'] == 'Unactive' ? 'selected' : '' }}>Unactive</option>
                            </select>
                            
                            @error('status')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 mt-6 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>