<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EcommerceController extends Controller
{
    public function index()
    {
        $data = Http::get('https://fakestoreapi.com/products');
        
        return view('welcome', ['products' => $data->object()]);
    }
}
