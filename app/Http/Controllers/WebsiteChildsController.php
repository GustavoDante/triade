<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteChildsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $clothings = Product::where('type', 'clothings')->get();
        $shoes = Product::where('type', 'shoes')->get();
        
        return view('website.childs', compact('products', 'clothings', 'shoes'));
    }
}
