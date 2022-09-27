@extends('layouts.ecommerce')

@section('content')
    
    <section class="flex-center py-28">

        <div class="relative shadow-md rounded-lg w-5/6 md:w-4/6 lg:w-3/6 
        xl:w-2/6 mx-auto">

            <div class="flex justify-center">
                <img src="{{ asset('img/logo.png') }}" 
                class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md 
                border-4 border-white transition duration-200 transform 
                hover:scale-110">
            </div>
            
            <div class="mt-16">
                <h1 class="font-bold text-center text-3xl text-gray-900">Delicias Cella</h1>
                <p class="text-center text-sm text-gray-400 font-medium">Emprendimiento de pasteleria</p>
                <div class="my-5 px-6">
                    <a href="#" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Connect with <span class="font-bold">@pantazisoft</span></a>
                </div>
                <div class="flex justify-between items-center my-5 px-6">
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Twitter</a>
                    <a href="https://www.instagram.com/deliciascella" target="_blank" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Email</a>
                </div>
            </div>
        </div>
    </section>

@endsection