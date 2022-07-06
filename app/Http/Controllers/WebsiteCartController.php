<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteCartController extends Controller
{
    public function index()
    {
        $products = Product::get();

        // $clothings = Product::where('type', 'clothings')->get();
        // $shoes = Product::where('type', 'shoes')->get();
        
        return view('website.cart', compact('products'));
    }
}
