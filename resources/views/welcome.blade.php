<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>@yield('title', 'Delicias Cella')</title>
</head>
<body class="bg-gray-50">

    <nav class="fixed flex-between inset-0 h-16 bg-blue-400 text-white shadow-lg
    py-3 px-6">

        <div class="flex-center">

            <img src="{{ asset('img/logo.png') }}" 
            class="w-12 h-12 rounded-full" alt="Logo">

            <section class="menu ml-12 text-white">
                <i class="material-icons">menu</i>
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

    <main class="mt-16">
        
        <style>
            * { box-sizing: border-box; }

            .carousel-cell {
                width: 66%;
                height: 300px;
                background: #8C8;
                counter-increment: carousel-cell;
            }

            .carousel-cell:before {
                display: block;
                text-align: center;
                content: counter(carousel-cell);
                line-height: 200px;
                font-size: 80px;
                color: white;
            }
        </style>

        <div class="carousel" data-flickity='{ "wrapAround": true, "contain": true }'>
        <div class="carousel-cell"></div>
        <div class="carousel-cell"></div>
        <div class="carousel-cell"></div>
        <div class="carousel-cell"></div>
        <div class="carousel-cell"></div>
      </div>

    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
       
    </script>

</body>
</html>