<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Gallery') }}
        </h2>
    </x-slot>

    @section('page-title', 'Gallery')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="d-flex">
                        <form action="{{ route('gallery.update', $gallery['id']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
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

                            <label for="outfit_id" class="block text-sm font-medium leading-6 text-gray-900">Outfit</label>
                            <select name="outfit_id" id="outfit_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a outfit</option>
                                @foreach ($outfits as $outfit)
                                    @if($gallery['outfit_id'] == $outfit->id)
                                        <option value="{{ $outfit->id }}" selected>{{ $outfit->title }}</option>
                                    @else
                                        <option value="{{ $outfit->id }}">{{ $outfit->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('outfit_id')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $gallery->title) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('title')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="image_path" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Image Path</label>
                            <input type="file" name="image_path" id="image_path" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('image_path')
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