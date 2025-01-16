<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('Dashboard_structer') @section('content')
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
                <div class="flex items-center justify-center w-full px-4"> <span class="text-lg font-semibold">Edit the
                        Book</span> </div>
            </div>
            <div class="max-w-3xl mx-auto p-4 bg-white rounded shadow-md w-full mt-4">
                <div class="bg-gray-800 text-white p-4 rounded-t-md">
                    <h2 class="text-lg font-bold mb-4">Edit Book</h2>
                </div>
                <div class="p-4">
                    @if ($errors->any())
                    <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                        input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('update', $book->id) }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                        <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="title" name="title" value="{{ $book->title }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                        <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="author" name="author" value="{{ $book->author }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="publication_year" class="block text-gray-700 text-sm font-bold mb-2">Publication Year:</label>
                        <input type="number" min="1000" max="9999" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="publication_year" name="publication_year" value="{{ $book->publication_year }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                        <textarea name="genre" id="genre" rows="4" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" required>{{ json_encode($book->genre) }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                        <textarea class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="description" name="description" required>{{ $book->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2">Image URL:</label>
                        <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="image_url" name="image_url" value="{{ $book->image_url }}" required>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Book</button>
                </form>

                </div>
            </div>
        </div>
    @endsection
</body>

</html>
