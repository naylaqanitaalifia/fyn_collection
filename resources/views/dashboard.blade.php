<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>
    
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


    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <div class="flex flex-col mt-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere pariatur officia culpa odio nulla in architecto praesentium omnis, suscipit eaque magnam ratione maiores eligendi eum expedita sunt dicta ex provident.
            </div>
        </div>
    </div>
</x-app-layout>
