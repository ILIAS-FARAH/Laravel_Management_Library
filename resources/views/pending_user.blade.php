@extends('Dashboard_structer')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white border-b border-gray-200 text-black p-6 rounded-t-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800"><strong><i>Pending Users</i></strong></h1>
        </div>
        @if ($pendingUsers->isEmpty())
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-semibold text-gray-800">Check back later for any new registrations.</h2>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                @foreach ($pendingUsers as $pendingUser)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $pendingUser->name }}</h2>
                            <p class="text-sm text-gray-600">{{ $pendingUser->email }}</p>
                        </div>
                        <div class="mt-4">
                            <form action="{{ route('admin.update-status', ['id' => $pendingUser->id, 'status' => 'accepted']) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">Accept</button>
                            </form>
                            <form action="{{ route('admin.update-status', ['id' => $pendingUser->id, 'status' => 'rejected']) }}" method="POST" class="mt-2">
                                @csrf
                                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-200">Reject</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
