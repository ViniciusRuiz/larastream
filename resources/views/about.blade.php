<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terebinime</title>
    <link rel="shortcut icon" href="{{ asset('img/terebi.png') }}" type="image/png">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/brands.css">
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
            <d class="flex align-content-end items-center">
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
                            <a href="#responsive-header" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase
                            tracking-wide font-bold text-xs py-3 ml-8">
                                Anime List
                            </a>
                            <a href="#responsive-header" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase tracking-wide
                            font-bold text-xs py-3 ml-8">
                                Genres
                            </a>
                            <a href="#responsive-header" class="no-underline text-grey-dark border-b-2 border-transparent hover:border-blue-600 uppercase tracking-wide
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
        <div
            class="flex flex-col shadow-lg rounded text-white items-center justify-center bg-gray-800 mx-4 py-4 lg:mx-0 ">
            <div class="mx-4">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, assumenda
                    ipsum
                    ipsam ad et amet,
                    voluptatum debitis in vero voluptatem eum tempora non quam possimus eaque! Nemo repudiandae quaerat
                    esse!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non velit eligendi in ipsa
                    doloremque!
                    Fuga repudiandae eligendi saepe cumque delectus. Laborum aperiam cumque ab, atque sint eveniet dolor
                    a
                    perspiciatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, assumenda
                    ipsum
                    ipsam ad et amet,
                    voluptatum debitis in vero voluptatem eum tempora non quam possimus eaque! Nemo repudiandae
                    quaerat
                    esse!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non velit eligendi in ipsa
                    doloremque!
                    Fuga repudiandae eligendi saepe cumque delectus. Laborum aperiam cumque ab, atque sint eveniet
                    dolor
                    a
                    perspiciatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, assumenda
                    ipsum
                    ipsam ad et amet,
                    voluptatum debitis in vero voluptatem eum tempora non quam possimus eaque! Nemo repudiandae
                    quaerat
                    esse!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non velit eligendi in ipsa
                    doloremque!
                    Fuga repudiandae eligendi saepe cumque delectus. Laborum aperiam cumque ab, atque sint
                    eveniet dolor
                    a
                    perspiciatis.</p>
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
