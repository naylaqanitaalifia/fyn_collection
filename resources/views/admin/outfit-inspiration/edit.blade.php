<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Outfit Inspiration') }}
        </h2>
    </x-slot>

    @section('page-title', 'Outfit Inspiration')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="d-flex">
                        <form action="{{ route('outfit-inspiration.update', $outfits['id']) }}" method="POST">
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

                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $outfits['title'] }}">
                            @error('title')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="desc" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Description</label>
                            <input type="text" name="desc" id="desc" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ $outfits['desc'] }}">
                            @error('desc')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror

                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="" disabled selected hidden>Select a status</option>
                                <option value="Active" {{ $outfits['status'] == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Unactive" {{ $outfits['status'] == 'Unactive' ? 'selected' : '' }}>Unactive</option>
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