<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $search = Product::all();

        $key = trim($request->get('q'));

        if($key != ''){
            $search = Product::query()
            ->where('name', 'like', "%{$key}%")
            ->orWhere('description', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();
        }

        return response()->view('search', ['products' => $search, 'query' => $key ]);
    }
}
