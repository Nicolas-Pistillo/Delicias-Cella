<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend/main-page.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>@yield('title', 'Delicias Cella')</title>
</head>
<body class="bg-gray-200">

    <nav class="fixed flex-between inset-0 h-16 bg-blue-400 text-white shadow-lg
    py-3 px-6 z-10">

        <div class="flex-center">

            <img src="{{ asset('img/logo.png') }}" 
            class="w-12 h-12 rounded-full" alt="Logo">

            <section class="menu ml-12 text-white flex-center">
                
                <a href="#" class="mr-4">Productos</a>

                <a href="#" class="mr-4">Nosotros</a>

                <a href="#" class="mr-4">Contacto</a>

            </section>

        </div>

        <section class="user-options flex-bottom">

            @auth
                <span>AUTENTICADO</span>
            @else
                <i class="material-icons" style="font-size: 38px">account_circle</i>
            @endauth

        </section>

    </nav>

    <main class="my-16">

        <div class="carousel mb-16" data-flickity='{ "wrapAround": true, "contain": true }'>

            <div class="carousel-cell">
                <img src="{{ asset('img/pasteleria.jpg') }}" class="carousel-img">
            </div>

            <div class="carousel-cell">
                <img src="{{ asset('img/alfajores.jpg') }}" class="carousel-img">
            </div>

            <div class="carousel-cell">
                <img src="{{ asset('img/brownies.jpg') }}" class="carousel-img">
            </div>

            <div class="carousel-cell">
                <img src="{{ asset('img/pastafrola.jpg') }}" class="carousel-img">
            </div>

        </div>

        <h3 class="mb-8 uppercase font-semibold text-center text-2xl" 
        style="letter-spacing: 2px">
            Productos
        </h3>

        <section class="products flex-center flex-wrap px-8">

            @for ($i = 0; $i < 8; $i++)
                
                <div class="w-80 h-96 shadow-lg m-4 bg-gray-100 rounded-lg overflow-hidden">

                    <img src="{{ asset('img/logo.png') }}" alt="Foto Prueba"
                    class="w-full h-52 object-cover">

                    <div class="px-3 py-6 h-44 flex flex-col justify-between items-center">

                        <div>
                            <h4 class="font-semibold mb-3">Nombre del producto</h4>

                            <p class="font-light text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat placeat, a explicabo eligendi voluptatibus.
                            </p>
    
                        </div>

                        <a href="#">Encargar</a>
                        
                    </div>

                </div>

            @endfor

        </section>

    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>