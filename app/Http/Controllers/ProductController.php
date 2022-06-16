<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Product::find($id);
        $clothings = Product::where('type', 'clothings')->get();
        $shoes = Product::where('type', 'shoes')->get();

        return view('website.product.index', compact('product', 'clothings', 'shoes'));
    }
}
