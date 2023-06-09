@extends("layoutprincipal")
<br>
<br>
@section("titulo")
Hello... Esto es una directiva yield
@endsection

@section("subtitulo")
Hello... Esto es una directiva yield
@endsection

@section("texto")
Hello... Esto es una directiva yield
@endsection

    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">
        <nav
            class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
        <div class="px-6 w-full flex flex-wrap items-center justify-between">
            <div class="flex items-center">
                <button
                class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContentY"
                aria-controls="navbarSupportedContentY"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fas"
                    class="w-5"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                    fill="currentColor"
                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                </svg>
                </button>
                <a class="navbar-brand text-blue-600" href="#!">
                <svg
                    class="w-5 h-5 ml-2 lg:ml-0 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512">
                    <path
                    fill="currentColor"
                    d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"
                    ></path>
                </svg>
                </a>
            </div>
            <div class="flex items-center lg:ml-auto">
                <a
                type="button"
                class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                href="{{route("sesion")}}"
                >
                Inicia sesión
            </a>
                <a
                type="button"
                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                href="{{route("registro")}}"
                >
                Registrate es gratis!
        </a>
            </div>
            </div>
        </nav>
    
        <div
            class="relative overflow-hidden bg-no-repeat bg-cover"
            style="
            background-position: 50%;
            background-image: url('https://static1.educaedu-colombia.com/adjuntos/12/00/28/universidad-santo-tom-s---seccional-bucaramanga-002872_large.jpg');
            height: 500px;
            "
        >
            <div
            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.75)"
            >
            <div class="flex justify-center items-center h-full">
                <div class="text-center text-white px-6 md:px-12">
                <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">
                    Bienvenidos a la pagina <br /><span>de prueba de la USTA</span>
                </h1>
                <a
                    type="button"
                    class="inline-block px-7 py-3 border-2 border-white text-white font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                    href="{{route("registro")}}">
                    Comienza ya!
            </a>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
        </body>
    </html>