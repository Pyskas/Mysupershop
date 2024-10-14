<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($hash)
    {
        $data['product'] = Product::with('images', 'category', 'options')->where('hash', $hash)->first();

        return view('pages/product', $data);
    }
}
