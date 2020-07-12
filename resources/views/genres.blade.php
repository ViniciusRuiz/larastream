<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terebinime</title>
    <link rel="shortcut icon" href="{{ asset('img/terebi.png') }}" type="image/png">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Fontawesome -->
    <!-- <link rel="stylesheet" href="/css/all.min.css"> -->
    <script src="js/all.js"></script>

<body class="bg-gray-900 font-sans leading-normal tracking-normal">
    <!--Container-->
    <div class="container shadow-lg mx-auto lg:mt-4">
        <nav class="flex lg:rounded items-center bg-gray-800 flex-wrap p-4 lg:px-8 justify-between">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <img src="{{ asset('img/terebitw.png') }}" alt="Terebiinime" width="30px" class="mr-2">
                <a href="/" class="font-mono text-lg font-semibold">Terebinime</a>
                <div class="ml-1 align-items-center text-lg align-content-start">
                    <button id="toggle-mode">
                        <i class="fas fa-sun text-orange-400"></i>
                        <!-- <i class="fas fa-moon text-white"></i> -->
                    </button>
                </div>
            </div>
            <div class="flex align-content-end items-center">
                <div class="hidden md:block text-white">
                    <input class="input bg bg-gray-900 rounded border border-transparent px-3" placeholder="Search" />
                </div>
                <div class="flex lg:hidden">
                    <button id="navbar-menu"
                        class="flex items-center px-3 py-2 border rounded text-teal-lighter border-transparent hover:text-white hover:border-white">
                        <i class="fas fa-bars text-white"></i>
                        <!-- <i class="fas fa-stream"></i> -->
                    </button>
                </div>
                <div class="hidden lg:block">
                    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                        <div class="text-sm lg:flex-grow text-white font-semibold">
                            <a href="anime" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase
                            tracking-wide font-bold text-xs py-3 ml-8">
                                Anime List
                            </a>
                            <a href="genres" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase tracking-wide
                            font-bold text-xs py-3 ml-8">
                                Genres
                            </a>
                            <a href="release" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase tracking-wide
                            font-bold text-xs py-3 ml-8">
                                Release Date
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!--Container-->

    <div class="container mx-auto rounded mt-6 mx-2">
        <div class="grid-rows-2 mb-8">
            <div class="row-span-1 lg:mx-0 mx-2">
                <div class="grid lg:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                    <div class="relative shadow-lg rounded group h-20 w-30 flex justify-center items-center
                            mx-2 my-2 lg:m-0">
                        <div class="rounded-lg h-full w-full bg-white absolute z-10 bg-cover bg-center opacity-50 hover:opacity-100 transition-all duration-500 ease-in-out"
                            style="background-image: url('{{ asset('img/neko.jpg') }}')">
                        </div>
                        <a class="font-bold text-lg text-white absolute z-20 pointer-events-none">
                            Action
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer bg-gray-900 font-sans text-center text-white align-items-center mb-4 mt-8">
            <div class="inline">
                <a class="mx-4" href="about">About</a>
                <a class="mx-4" href="team">Team</a>
                <a class="mx-4" href="contact">Contact</a>
            </div>
            <h5>Powered by <a href="https://sainseni.org/" target="_blank">Sainseni</a>. Made with <i
                    class="fa fa-heart text-red-600"></i>
                by <a href="https://khoironiks.my.id" target="_blank">Khoironi Kurnia Syah</a></h5>
        </div>
    </footer>
</body>

</html>
