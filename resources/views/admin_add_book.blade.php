@extends('Dashboard_structer')
@section('content')


<div class="flex flex-col flex-1 overflow-y-auto">
    <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
        <div class="flex items-center justify-center w-full px-4">
            <span class="text-lg font-semibold">ADD the book </span>
        </div>
    </div>
<div class="max-w-3xl mx-auto p-4 bg-white rounded shadow-md w-full mt-4">
    {{-- <div class="bg-gray-800 text-white p-4 rounded-t-md">
        <h2 class="text-lg font-bold mb-4">Add a Book</h2>
    </div> --}}
    <div class="p-4">
        @if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif
        <form  method="POST" action="{{ route('store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="title" name="title" >
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="author" name="author" >
            </div>
            <div class="mb-4">
                <label for="publication_year" class="block text-gray-700 text-sm font-bold mb-2">Publication Year:</label>
                <input type="number" min="1000" max="9999" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="publication_year" name="publication_year" >
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                <textarea name="genre" id="genre" rows="4" placeholder='["Action", "Drama", "Comedy"]' class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="description" name="description" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2">Image URL:</label>
                <input type="text" class="form-control block w-full p-2 text-gray-700 border border-gray-300 rounded" id="image_url" name="image_url" >
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Book</button>
        </form>
    </div>
</div>
 @if (session('success')) <script> console.log('Flash message: {{ session('success') }}'); sessionStorage.setItem('flashMessage', '{{ session('success') }}'); </script> @else <script> console.log('No flash message found.'); </script> @endif

@endsection
