@extends('dashboard')
@section('content')
    <div class="flex-1 flex items-center justify-center bg-white min-h-screen">
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">Mes Reservations</h1>
            <div class="bg-white rounded-lg shadow-lg p-6">
                @if ($reservations->isEmpty())
                    <p class="text-gray-700 text-center">You have no reservations.</p>
                @else
                    <ul class="list-disc list-inside">
                        @foreach ($reservations as $reservation)
                            <li class="mb-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <img src="{{ $reservation->book->image_url }}"
                                                alt="{{ $reservation->book_name }}" class="w-16 h-16 rounded-lg shadow-lg">
                                        </div>
                                        <div>
                                            <h2 class="text-xl font-bold text-gray-900">
                                                {{ $reservation->book_name }}</h2>
                                            <p class="text-green-700">Reserved on: {{ $reservation->created_at->format('M d, Y') }}</p>
                                            <p class="text-red-700">Return date: {{ $reservation->return_date->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <form action="{{ route('reservations_cancel', $reservation->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-red-300">
                                                Retourner
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
