<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class ConsumenController extends Controller
{
    function home()
    {
        $pageTitle = 'Home | Camellya';
        return view('home/index', ['pageTitle' => $pageTitle]);
    }
    function produk()
    {
        $pageTitle = 'Product | Camellya';

        $category = Categorie::all();
        $product = Product::all();

        return view('product/index', [
            'pageTitle' => $pageTitle,
            'category' => $category,
            'product' => $product,
        ]);
    }
    
}
