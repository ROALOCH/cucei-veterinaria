<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::byType('product')->orderDesc()->take(3)->get();
        $services = Product::byType('service')->orderDesc()->take(2)->get();

        return response()->view('home', [
            'products' => $products,
            'services' => $services
        ]);

    }
}
