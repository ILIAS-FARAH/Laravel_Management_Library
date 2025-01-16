<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('Dashboard_structer')

    @section('content')
        <div class="flex flex-1 items-center justify-center">
            <div class="w-full max-w-3xl p-4 bg-white rounded shadow-md">
                <h2 class="text-xl font-bold text-center mb-4">All the Books</h2>
                <ul class="list-none mb-4">
                    @foreach ($book as $b)
                        <li class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-4">
                            <div class="w-full">
                                <h3 class="text-lg font-medium mb-1">{{ $b->title }}</h3>
                                <div class="text-sm text-gray-500 mb-2"> <span class="font-semibold">Author:</span>
                                    {{ $b->author }} </div>
                                <div class="text-sm text-gray-500 mb-2"> <span class="font-semibold">Publication
                                        Year:</span> {{ $b->publication_year }} </div>
                                <div class="text-sm text-gray-500 mb-2"> <span class="font-semibold">Genre:</span>
                                        {{ implode(', ', $b->genre) }}
                                </div>
                                <div class="text-sm text-gray-500 mb-2"> <span class="font-semibold">Description:</span>
                                    {{ $b->description }} </div>
                            </div>
                            <div class="flex justify-end mt-4 space-x-2">

                                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-4 rounded"><a
                                        href="{{ route('edit', $b->id) }}">Modify</a></button>

                                <form action="{{ route('destroy', $b->id) }}" methode="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded"
                                        type="submit">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-center mt-4">
                    @if ($book->onFirstPage())
                        <button class="bg-gray-500 text-white font-bold py-1 px-4 rounded opacity-50 cursor-not-allowed"
                            disabled>Previous</button>
                    @else
                        <a href="{{ $book->previousPageUrl() }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Previous</a>
                        @endif @if ($book->hasMorePages())
                            <a href="{{ $book->nextPageUrl() }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded ml-2">Next</a>
                        @else
                            <button class="bg-gray-500 text-white font-bold py-1 px-4 rounded opacity-50 cursor-not-allowed"
                                disabled>Next</button>
                        @endif
                </div>
            </div>
        @endsection



</body>

</html>
