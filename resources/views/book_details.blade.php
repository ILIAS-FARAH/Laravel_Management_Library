<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-screen-lg mx-auto mt-10 p-5 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <form action="{{ route('reserve') }}" method="POST">
            @csrf
            <div class="flex flex-col md:flex-row items-center md:items-start">
                <!-- Image Section -->
                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6 border-2 border-gray-300 rounded-lg p-2">
                    <img src="{{ $book->image_url }}" alt="{{ $book->title }}"
                        class="w-full md:w-48 h-auto rounded-lg shadow-lg">
                </div>
                <!-- Book Details Section -->
                <div class="flex flex-col justify-between w-full">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-3">{{ $book->title }}</h1>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Author:</strong> {{ $book->author }}</p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Publication Year:</strong> {{ $book->publication_year }}</p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Genre:</strong> {{ implode(', ', $book->genre) }}</p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-4"><strong>Description:</strong> {{ $book->description }}</p>
                    <button type="submit"
                        class="mt-3 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        Reserve book
                    </button>
                    <a href="{{ route('home') }}"
                        class="mt-3 px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800">
                        Go back
                    </a>
                </div>
            </div>
        </form>
        @if (session('success'))
        <div class="w-full mt-6 p-5 bg-green-500 text-white rounded-lg shadow-lg">
            {{ session('success') }}
        </div>
    @endif
        @if (session('error'))
        <div class="w-full mt-6 p-5 bg-red-500 text-white rounded-lg shadow-lg">
            {{ session('error') }}
        </div>
    @endif
    </div>
</body>

</html>
