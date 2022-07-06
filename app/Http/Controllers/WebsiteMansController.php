<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteMansController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $clothings = Product::where('type', 'clothings')->get();
        $shoes = Product::where('type', 'shoes')->get();
        
        return view('website.mans', compact('products', 'clothings', 'shoes'));
    }
}
