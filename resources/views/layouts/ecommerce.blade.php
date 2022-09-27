<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @yield('head')
    <title>@yield('title', 'Delicias Cella')</title>
</head>
<body class="bg-gray-200 relative">

    <nav class="fixed flex-between inset-0 h-16 bg-blue-400 text-white shadow-lg
    py-3 px-6 z-10">

        <div class="flex-center">

            <a href="{{ route('frontend.catalog') }}">
                <img src="{{ asset('img/logo.png') }}" 
                class="w-12 h-12 rounded-full" alt="Logo">
            </a>

            <section class="menu ml-12 text-white flex-center">
                
                <a href="{{ route('frontend.catalog') }}" class="mr-4">Productos</a>

                <a href="{{ route('frontend.about') }}" class="mr-4">Nosotros</a>

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
        @yield('content') 
    </main>

    <a href="https://api.whatsapp.com/send?phone=541169755391" target="_blank">
        <img src="{{ asset('img/whatssap-icon.png') }}" alt="Whatssap"
        class="w-14 h-14 fixed bottom-4 right-4 cursor-pointer">
    </a>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>