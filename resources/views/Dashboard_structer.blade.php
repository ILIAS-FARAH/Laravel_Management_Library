<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex h-screen bg-gray-100">


        <div class="hidden md:flex flex-col w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <span class="text-white font-bold uppercase">BIBLIO MANAGEMENT</span>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800">
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Home
                    </a>
                    <a href="{{ route('info_user') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Info_Users
                    </a>
                    <a href="{{ route('create') }}" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <img src="/images/open-book.png" alt="" class="h-6 w-6 mr-2">

                        Add a book
                    </a>
                    <a href="{{ route('manage_books') }}"
                        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <img src="/images/training.png" alt="" class="h-6 w-6 mr-2">

                        Manage Books
                    </a>
                    <a href="{{ route('admin.pending-users') }}"
                        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <img src="/images/user-interface.png" alt="" class="h-6 w-6 mr-2">

                        user Status
                    </a>
                    <a href="{{route('profile.edit')}}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Settings
                    </a>


                </nav>
            </div>
        </div>
        @yield('content')
    </div>
    </div>

</x-app-layout>
