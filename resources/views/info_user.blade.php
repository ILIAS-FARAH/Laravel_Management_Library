@extends('Dashboard_structer')
@section('content')
    <!-- resources/views/admin/users.blade.php -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Information</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container mx-auto p-4">
            <div class="bg-white border-b border-gray-200 text-black p-4 rounded-t-md mb-20">
                <h1 class="text-lg font-bold mb-4 text-center"><strong><i>Users Informations</i></strong></h1>
            </div>
            @if (session('message'))
            <div class="w-full mt-6 p-5 bg-green-500 text-white rounded-lg shadow-lg">
                {{ session('message') }}
            </div>
        @endif
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($users as $user)
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <h3 class="mt-4 text-lg font-semibold">Reservations:</h3>
                        <ul class="list-disc pl-5">
                            @foreach ($user->reservations as $reservation)
                                <li>{{ $reservation->book_name }} - <strong>Return Date:</strong> <span
                                        class="text-red-500">{{ $reservation->return_date->format('Y-m-d') }}</span> </li>
                            @endforeach
                        </ul>
                        <form method="POST" action="{{ route('users.penalize', $user->id) }}"> @csrf <button type="submit" class="mt-4 bg-red-500 text-white py-2 px-4 rounded">Apply Penalty</button> </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
