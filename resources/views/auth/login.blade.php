{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
            <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                    <div class="mt-12 flex flex-col items-center">

                        <div class="text-center mb-12">
                            <a href="{{ route('home') }}" class="inline-block">
                                <svg class="w-20 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
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
                                        <path d="M232.71 101.632c.254 28.93 45.334 28.935 45.589 0z"
                                            style="fill:#fff" />
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
                                <span class="block text-center text-gray-800 font-semibold text-lg leading-tight">
                                    ur <br> online library
                                </span>
                            </a>
                        </div>

                        <h1 class="text-2xl xl:text-3xl font-extrabold">
                            Sign up
                        </h1>
                        <div class="w-full flex-1 mt-8">
                            <div class="flex flex-col items-center">
                                <button
                                    class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                                    <div class="bg-white p-2 rounded-full">
                                        <svg class="w-4" viewBox="0 0 533.5 544.3">
                                            <path
                                                d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                                fill="#4285f4" />
                                            <path
                                                d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                                fill="#34a853" />
                                            <path
                                                d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                                fill="#fbbc04" />
                                            <path
                                                d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                                fill="#ea4335" />
                                        </svg>
                                    </div>
                                    <span class="ml-4">
                                        Sign Up with Google
                                    </span>
                                </button>

                                <button
                                    class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5">
                                    <div class="bg-white p-1 rounded-full">
                                        <svg class="w-6" viewBox="0 0 32 32">
                                            <path fill-rule="evenodd"
                                                d="M16 4C9.371 4 4 9.371 4 16c0 5.3 3.438 9.8 8.207 11.387.602.11.82-.258.82-.578 0-.286-.011-1.04-.015-2.04-3.34.723-4.043-1.609-4.043-1.609-.547-1.387-1.332-1.758-1.332-1.758-1.09-.742.082-.726.082-.726 1.203.086 1.836 1.234 1.836 1.234 1.07 1.836 2.808 1.305 3.492 1 .11-.777.422-1.305.762-1.605-2.664-.301-5.465-1.332-5.465-5.93 0-1.313.469-2.383 1.234-3.223-.121-.3-.535-1.523.117-3.175 0 0 1.008-.32 3.301 1.23A11.487 11.487 0 0116 9.805c1.02.004 2.047.136 3.004.402 2.293-1.55 3.297-1.23 3.297-1.23.656 1.652.246 2.875.12 3.175.77.84 1.231 1.91 1.231 3.223 0 4.61-2.804 5.621-5.476 5.922.43.367.812 1.101.812 2.219 0 1.605-.011 2.898-.011 3.293 0 .32.214.695.824.578C24.566 25.797 28 21.3 28 16c0-6.629-5.371-12-12-12z" />
                                        </svg>
                                    </div>
                                    <span class="ml-4">
                                        Sign Up with GitHub
                                    </span>
                                </button>
                            </div>

                            <div class="my-12 border-b text-center">
                                <div
                                    class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                                    Or sign up with e-mail
                                </div>
                            </div>

                            <div class="mx-auto max-w-xs">
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" name="email" placeholder="Email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: red; font-weight: bold;">
                                        <strong>{{ $message }}</strong> </span>
                                @enderror
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" name="password" placeholder="Password" />
                                <button
                                    class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path d="M20 8v6M23 11h-6" />
                                    </svg>
                                    <span class="ml-3">
                                        Sign Up
                                    </span>
                                </button>
                                <p class="mt-6 text-xs text-gray-600 text-center">
                                    I agree to abide by templatana's
                                    <a href="#" class="border-b border-gray-500 border-dotted">
                                        Terms of Service
                                    </a>
                                    and its
                                    <a href="#" class="border-b border-gray-500 border-dotted">
                                        Privacy Policy
                                    </a>
                                    <br>
                                    <a href="{{ route('register') }}">i don't have an account</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                    <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                        style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
