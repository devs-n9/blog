<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index($name)
    {
        $products = [
            "Apples",
            "Bananas",
            "Orange"
        ];
        
        return view('products.index', [
            'count' => 3,
            'products' => $products,
            'product' => $name
        ]);
    }
    
    public function lists()
    {
        echo "list";
    }
}
