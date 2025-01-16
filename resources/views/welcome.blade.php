<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')

</head>

<body>

    {{-- ------------------------------------------------------------------------navbar------------------------------------------------------------------------------------------- --}}
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
                        <path
                            d="M304.814 210.533a88.771 88.771 0 0 0-17.655-50.033H243.48a88.774 88.774 0 0 0-17.656 50.029l-3.247 75.859h85.484z"
                            style="fill:#88b0ea" />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
                            <path
                                d="M304.814 210.533a88.771 88.771 0 0 0-17.655-50.033H243.48a88.774 88.774 0 0 0-17.656 50.029l-3.247 75.859h85.484z"
                                style="fill:#88b0ea" />
                            <path
                                d="M275.132 141.8v-10.28h-21.389c.539 20.308-1 15.514-10.695 28.981l21.39 30.584 22.721-30.585a97.978 97.978 0 0 0-7.819-8.779 13.906 13.906 0 0 1-4.208-9.921z"
                                style="fill:#ffd5bd" />
                            <path
                                d="M181.884 285.215H92.608a15.639 15.639 0 0 1 0-31.277h89.276zM106.845 251.785H194.2c9.117 0 16.507-7.091 16.507-15.84s-7.39-15.84-16.507-15.84h-87.355c8.712 8.15 8.639 23.614 0 31.68z"
                                style="fill:#eaf5ff" />
                            <rect x="-12.377" y="207.542" width="121.844" height="34.652" rx="5.776"
                                transform="rotate(-69.831 48.545 224.868)" style="fill:#f47676" />
                            <path transform="rotate(-69.831 48.545 224.868)" style="fill:#c14949"
                                d="M22.319 207.542H74.77v34.652H22.319z" />
                            <path style="fill:#ffd071" d="M10 286.392h320v31.217H10z" />
                            <path
                                d="M190.887 232.945h-77.523a23.086 23.086 0 0 1 0 6h77.523c3.936-.064 3.948-5.933 0-6zM181.884 266.576H96.28a3 3 0 1 0 0 6h85.6z"
                                style="fill:#c9d4ff" />
                            <path
                                d="M269.1 211.975c-.09 5.258-7.911 5.258-8 0 .093-5.257 7.915-5.257 8 0zM269.1 244.06c-.09 5.258-7.911 5.257-8 0 .093-5.26 7.915-5.26 8 0z"
                                style="fill:#fff" />
                            <path
                                d="M281.326 153.752c-8.038-6.974-5.942-12.831-6.194-22.229h-21.389c-.139 2.858.422 12.012-.547 14.63z"
                                style="fill:#e58e6c" />
                            <path
                                d="M216.941 73.044V103.5s-.812 33.79 39.192 33.709c0 0 27.008 2.64 37.974-22.337l4.061-14.824s16.043-47.518-45.284-50.767c0 .004-22.54-2.636-35.943 23.763z"
                                style="fill:#ffd5bd" />
                            <path
                                d="M330 42.032a19.64 19.64 0 0 1-19.64 19.64c-26-.9-25.993-38.386 0-39.281A19.64 19.64 0 0 1 330 42.032z"
                                style="fill:#575b5e" />
                            <path
                                d="M216.941 73.044s7.6-15.378 36.356-15.692c27.539.693 45.793 20.463 40.81 57.524 0 0 25.587-19.292 15.636-54.219 0 0-8.325-34.522-48.33-34.522 0 0-47.113-.077-44.472 46.909z"
                                style="fill:#575b5e" />
                            <path d="M232.71 101.632c.254 28.93 45.334 28.935 45.589 0z" style="fill:#fff" />
                            <path d="M182.152 218.356H94.624a16.049 16.049 0 1 1 0-32.084h87.528z"
                                style="fill:#eaf5ff" />
                            <path d="M182.152 205.314v-6H96.28a3 3 0 0 0 0 6z" style="fill:#c9d4ff" />
                            <path
                                d="M307.374 274.4a4 4 0 0 1-3.993-3.829l-2.563-59.871a84.807 84.807 0 0 0-16.829-47.759 4 4 0 0 1 .731-5.609c5.213-3.4 7.876 4.493 10.507 7.868a94.048 94.048 0 0 1 13.584 45.159l2.562 59.867a4 4 0 0 1-3.999 4.174zM222.58 290.392a4 4 0 0 1-4-4.171l3.247-75.859a94.037 94.037 0 0 1 13.585-45.162c2.637-3.4 5.288-11.244 10.507-7.869a4 4 0 0 1 .73 5.61A84.805 84.805 0 0 0 229.82 210.7l-3.247 75.86a4 4 0 0 1-3.993 3.832z"
                                style="fill:#383a49" />
                            <path
                                d="M264.438 195.088a4 4 0 0 1-3.3-1.739l-20.958-30.583a4 4 0 0 1-.114-4.347 73.786 73.786 0 0 1 7.128-9.488c2.846-2.831 2.631-7.284 2.549-10.949.086-5.246 7.91-5.267 8 0 .657 12.467-3.1 13.712-9.441 22.484l16.267 23.734 17.523-23.585c-4.729-5.58-11.222-10.26-10.959-18.816v-7.356c.087-5.248 7.909-5.267 8 0v7.357a9.84 9.84 0 0 0 3.008 7.066 101.318 101.318 0 0 1 8.182 9.188 4 4 0 0 1 .047 4.833l-22.722 30.583a4 4 0 0 1-3.21 1.618z"
                                style="fill:#383a49" />
                            <path
                                d="M258.021 141.271c-29.358 1.156-44.954-17.461-45.078-37.864V73.044c.1-5.237 7.9-5.279 8 0V103.5c0 .2-.1 11.989 8.286 20.5 9.52 10.951 48.789 17.779 61.218-10.738a4 4 0 1 1 7.325 3.216c-10.044 22.881-32.529 24.793-39.751 24.793zM323.586 60.552c-3.51.123-5.42-4.64-2.695-6.957a15.642 15.642 0 1 0-25.211-16.976 4 4 0 1 1-7.506-2.768 23.643 23.643 0 1 1 38.105 25.658 3.986 3.986 0 0 1-2.693 1.043z"
                                style="fill:#383a49" />
                            <path
                                d="M294.11 118.876c-3.678.141-5.491-5.028-2.421-7.187.955-.728 23.249-18.195 14.207-49.937-.37-1.467-8.113-31.53-44.483-31.617-10.955-.043-37.624 6.645-40.161 32.484 12.582-10.308 44.142-14.04 60.375.122 9.431 7.457 15.087 17.987 16.811 31.3a4 4 0 0 1-7.933 1.029c-1.447-11.167-6.1-19.931-13.841-26.05-19.869-16.084-52.656-3.484-56.136 5.8-1.7 3.637-7.438 2.481-7.581-1.549-.842-14.99 3-27.1 11.431-36 14.152-14.936 35.915-15.128 37.042-15.13 41.306 0 51.489 34.893 52.175 37.44 10.155 38.4-16.534 59.429-19.485 59.295z"
                                style="fill:#383a49" />
                            <path
                                d="M255.505 127.353c-13.195-.482-26.4-7.8-26.795-25.721a4 4 0 0 1 4-4h45.59a4 4 0 0 1 4 4c-.389 17.914-13.6 25.24-26.795 25.721zm-18.439-21.721c3.385 18.143 33.495 18.14 36.876 0zM83.088 219.979a3.979 3.979 0 0 1-2.331-.753A20.816 20.816 0 0 1 92.894 181.5h88.99a4 4 0 0 1 4 4v21.1a4 4 0 0 1-8 0v-17.1h-84.99c-12.352-.022-17.506 16.063-7.469 23.232 3.175 2.104 1.387 7.392-2.337 7.247z"
                                style="fill:#383a49" />
                            <path
                                d="M106.845 223.13h-8.181a4 4 0 1 1 0-8h8.181c5.255.089 5.255 7.91 0 8zM92.894 290.392a20.816 20.816 0 1 1 0-41.631h88.99c5.216.084 5.293 7.9 0 8h-88.99c-16.948.595-16.969 25.028 0 25.631 5.267.086 5.247 7.917 0 8z"
                                style="fill:#383a49" />
                            <path
                                d="M181.884 256.761h-75.039a4 4 0 0 1-2.728-6.926c7.277-7.213 7.06-20.842-.02-27.8a4.008 4.008 0 0 1 2.748-6.907h88.991c25.613.6 28.273 37.006 3.071 41.405a4 4 0 0 1-1.172-7.914 12.816 12.816 0 0 0-1.9-25.491H114.5c3.973 6.847 3.97 18.789 0 25.631h67.382c5.254.089 5.264 7.913.002 8.002zM39.482 290.392c-1.774.583-22.908-8-25.046-8.564a9.789 9.789 0 0 1-5.807-12.548l38.027-103.529a9.792 9.792 0 0 1 12.544-5.806l21.683 7.964a9.79 9.79 0 0 1 5.806 12.548l-34.012 92.6c-1.892 4.889-9.24 2.223-7.51-2.759l34.013-92.6a1.779 1.779 0 0 0-1.056-2.28l-21.682-7.964a1.777 1.777 0 0 0-2.28 1.055L16.139 272.038a1.778 1.778 0 0 0 1.055 2.28l21.682 7.963a1.734 1.734 0 0 0 .7.109c5.573-.09 5.495 8.162-.094 8.002z"
                                style="fill:#383a49" />
                            <path
                                d="M54.882 259.46a4.014 4.014 0 0 1-1.379-.245l-32.526-11.948a4 4 0 0 1-2.376-5.134L36.686 192.9a4 4 0 0 1 5.133-2.376l32.527 11.947a4.026 4.026 0 0 1 2.376 5.135l-18.085 49.233a4.02 4.02 0 0 1-3.755 2.621zm-27.393-18.324 25.017 9.19L67.833 208.6l-25.017-9.189zM330 321.609H10a4 4 0 0 1-4-4v-31.217a4 4 0 0 1 4-4h320a4 4 0 0 1 4 4v31.217a4 4 0 0 1-4 4zm-316-8h312v-23.217H14zM181.884 277.731a4 4 0 0 1-4-4v-20.97a4 4 0 0 1 8 0v20.97a4 4 0 0 1-4 4z"
                                style="fill:#383a49" />
                        </svg>
                    </svg>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MAKTABATY
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." onkeyup="searchBooks(this.value)">
                        <ul id="suggestions"
                            class="absolute bg-black border border-gray-200 w-full mt-1 rounded-lg shadow-lg">
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    </div>

                    <script>
                        let currentQuery = '';
                        let allBooks = [];
                        const userLoggedIn = @json(auth()->check());

                        function searchBooks(query) {
                            currentQuery = query;
                            if (query.length === 0) {
                                document.getElementById('suggestions').innerHTML = '';
                                return;
                            }
                            fetch(`/search-books?query=${query}`).then(response => response.json()).then(data => {
                                allBooks = data.books;
                                displayBooks(data.books, data.totalBooks);
                            });
                        }

                        function displayBooks(books, totalBooks) {
                            let suggestions = '';
                            if (books.length === 0) {
                                suggestions = '<li class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">No books found</li>';
                            } else {
                                books.slice(0, 10).forEach(book => {
                                    const bookLink = userLoggedIn ? `/books/${book.id}` : '/login';
                                    suggestions +=
                                        `<li class="hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"><a href="${bookLink}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">${book.title}</a></li>`;
                                });
                                if (totalBooks > 10) {
                                    suggestions +=
                                        `<li class="hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"><a href="#" onclick="showMoreBooks(event)" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Show more</a></li>`;
                                }
                            }
                            document.getElementById('suggestions').innerHTML = suggestions;
                        }

                        function showMoreBooks(event) {
                            event.preventDefault();
                            displayBooks(allBooks, allBooks.length);
                        }
                    </script>




                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        @if (Route::has('login'))

                            <li>
                                @auth
                                    <a href="{{ url('/home') }}"
                                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                        aria-current="page">dashboard</a>
                                </li>
                                <li>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">login</a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">register</a>
                                    @endif
                                @endauth
                            </li>
                        @endif
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent  md:p-0 ">About
                                us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- --------------------------------------------------------------fonctianilities carousel------------------------------------------------------------------------------- --}}
        <main class="flex-grow">
            <div class="text-xl font-bold m-5 text-center">welcome to my E-library</div>
            <div class="gallery border-2 rounded mx-auto m-5 bg-white" style="width:750px;">
                <div class="top flex p-2 border-b select-none">
                    <div class="heading text-gray-800 w-full pl-3 font-semibold my-auto"></div>
                    <div class="buttons ml-auto flex text-gray-600 mr-1">
                        <svg action="prev" class="w-7 border-2 rounded-l-lg p-1 cursor-pointer border-r-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path action="prev" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <svg action="next" class="w-7 border-2 rounded-r-lg p-1 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path action="next" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </div>
                </div>
                <div class="content-area w-full h-96 overflow-hidden">
                    <div class="platform shadow-xl h-full flex">
                        <div class="each-frame border-box flex-none h-full" title="CHECK OUR FONCTIONNALITIES">
                            <div class="main flex w-full p-8">
                                <div class="sub w-4/6 my-auto">
                                    <img class="w-full p-8" src="/images/e-learning.png" alt="">
                                </div>
                                <div class="sub w-full my-auto">
                                    <div class="head text-3xl font-bold mb-4">Reserver des livre online</div>
                                    <div class="long-text text-lg">Plus de 100 livre a decouvrire</div>
                                </div>
                            </div>
                        </div>
                        <div class="each-frame border-box flex-none h-full" title="welcome to my E-library">
                            <div class="main flex w-full p-8">
                                <div class="sub w-4/6 my-auto">
                                    <img class="w-full p-8"src="/images/calendar.png" alt="">
                                </div>
                                <div class="sub w-full my-auto">
                                    <div class="head text-3xl font-bold mb-4">fixer un objectif annuelle</div>
                                    <div class="long-text text-lg">set an annuelle objectif</div>
                                </div>
                            </div>
                        </div>
                        <div class="each-frame border-box flex-none h-full" title="welcome to my E-library">
                            <div class="main flex w-full p-8">
                                <div class="sub w-4/6 my-auto">
                                    <img class="w-full p-8"src="/images/book.png" alt="">
                                </div>
                                <div class="sub w-full my-auto">
                                    <div class="head text-3xl font-bold mb-4">garder une trace a vos livres preferer
                                    </div>
                                    <div class="long-text text-lg">leave a trace of all your books</div>
                                </div>
                            </div>
                        </div>
                        <div class="each-frame border-box flex-none h-full" title="welcome to my E-library">
                            <div class="main flex w-full p-8">
                                <div class="sub w-4/6 my-auto">
                                    <img class="w-full p-8" src="/images/search.png" alt="">
                                </div>
                                <div class="sub w-full my-auto">
                                    <div class="head text-3xl font-bold mb-4">essayer la recherche en plein text</div>
                                    <div class="long-text text-lg">trouver des resultat correspendant dans le texte de
                                        + 100 livre </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function gallery() {
                        this.index = 0;

                        this.load = function() {
                            this.rootEl = document.querySelector(".gallery");
                            this.platform = this.rootEl.querySelector(".platform");
                            this.frames = this.platform.querySelectorAll(".each-frame");
                            this.contentArea = this.rootEl.querySelector(".content-area");
                            this.width = parseInt(this.rootEl.style.width);
                            this.limit = {
                                start: 0,
                                end: this.frames.length - 1
                            };


                            this.frames.forEach(each => {
                                each.style.width = this.width + "px";
                            });
                            this.goto(this.index);
                        };

                        this.set_title = function() {
                            const currentTitle = this.frames[this.index].getAttribute("title");
                            this.rootEl.querySelector(".heading").innerText = currentTitle;
                        };

                        this.updateTransform = function() {
                            const offset = -(this.index * this.width);
                            this.platform.style.transform = `translateX(${offset}px)`;
                        };

                        this.next = function() {
                            if (this.index < this.limit.end) {
                                this.index++;
                                this.updateTransform();
                                this.set_title();
                            }
                        };

                        this.prev = function() {
                            if (this.index > this.limit.start) {
                                this.index--;
                                this.updateTransform();
                                this.set_title();
                            }
                        };

                        this.goto = function(index) {
                            if (index >= this.limit.start && index <= this.limit.end) {
                                this.index = index;
                                this.updateTransform();
                                this.set_title();
                            }
                        };

                        this.load();
                    }

                    const G = new gallery();

                    G.rootEl.addEventListener("click", function(t) {
                        const action = t.target.getAttribute("action");

                        if (action === "next" && G.index !== G.limit.end) {
                            G.next();
                        }
                        if (action === "prev" && G.index !== G.limit.start) {
                            G.prev();
                        }
                        if (action === "goto") {
                            let rv = t.target.getAttribute("goto");
                            rv = rv === "end" ? G.limit.end : parseInt(rv);
                            G.goto(rv);
                        }
                    });

                    document.addEventListener("keyup", function(t) {
                        const keyCode = t.keyCode;

                        if (keyCode === 39 && G.index !== G.limit.end) {
                            G.next();
                        }
                        if (keyCode === 37 && G.index !== G.limit.start) {
                            G.prev();
                        }
                    });
                </script>
        </main>
        {{-- -------------------------------------------------------------------books carousel ---------------------------------------------------------------- --}}
        <div class="text-xl font-bold m-5 text-center">Our books collection</div>
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4" id="carousel1">
            <div class="w-full relative flex items-center justify-center"> <!-- Previous Button --> <button
                    aria-label="slide backward"
                    class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                    id="prev1"> <svg class="dark:text-gray-900" width="8" height="14"
                        viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> </button> <!-- Carousel Slider -->
                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider1"
                        class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <!-- Loop through books and display as carousel items -->
                        @foreach ($book as $b)
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto"> <a
                                    href="{{ Auth::check() ? route('show', $b->id) : route('login') }}"> <img
                                        src="{{ $b->image_url }}" alt="{{ $b->title }}"
                                        class="object-cover object-center w-full h-96" /> </a>
                            </div>
                        @endforeach
                    </div>
                </div> <!-- Next Button --> <button aria-label="slide forward"
                    class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                    id="next1"> <svg class="dark:text-gray-900" width="8" height="14"
                        viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> </button>
            </div>
        </div>

        <script>
            function initCarousel(carouselId) {
                let defaultTransform = 0;
                const slider = document.getElementById(`slider${carouselId}`);
                const nextButton = document.getElementById(`next${carouselId}`);
                const prevButton = document.getElementById(`prev${carouselId}`);


                nextButton.addEventListener("click", () => {
                    defaultTransform -= slider.offsetWidth;
                    if (Math.abs(defaultTransform) >= slider.scrollWidth) {
                        defaultTransform = 0;
                    }
                    slider.style.transform = `translateX(${defaultTransform}px)`;
                });


                prevButton.addEventListener("click", () => {
                    if (defaultTransform === 0) {
                        defaultTransform = -slider.scrollWidth + slider.offsetWidth;
                    } else {
                        defaultTransform += slider.offsetWidth;
                    }
                    slider.style.transform = `translateX(${defaultTransform}px)`;
                });
            }


            initCarousel(1);
        </script>

        {{-- -=-------------------------------------------------------------footer-------------------------------------------------------------------------------------- --}}
        <footer class="bg-white dark:bg-gray-900 mt-auto">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">About us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Careers</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Brand Center</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Discord Server</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Licensing</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="px-4 py-6 pt-4 pb-4 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
                    <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2024 . All Rights
                        Reserved.</span>
                    <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
