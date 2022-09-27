@extends('layouts.ecommerce')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/frontend/catalog.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
@endsection
    
@section('content')
    
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
    style="letter-spacing: 2px">Productos</h3>

    <section class="products flex-center flex-wrap px-8">

        @foreach ($products as $product)
            
        <div class="w-80 shadow-xl m-4 bg-white rounded-lg overflow-hidden">

            <img src="{{ $product->image }}" alt="Foto Prueba"
            class="w-full h-40 object-contain py-3 border-b-2">

            <div class="flex h-52 flex-col justify-between items-center">

                <div class="pt-6 px-3">

                    <h4 class="font-semibold pb-1">{{ $product->category }}</h4>

                    <b class="text-green-500 pb-2">${{ $product->price }}</b>

                    <p class="font-light text-sm pb-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat placeat, a explicabo eligendi voluptatibus.
                    </p>

                </div>

                <a href="#" class="block w-full py-2 px-4 rounded-b-lg text-center 
                text-white transition duration-300 font-semibold
                bg-orange-800 hover:bg-orange-700">
                    Encargar
                </a>
                
            </div>

        </div>

        @endforeach

    </section>

@endsection

@section('scripts')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection