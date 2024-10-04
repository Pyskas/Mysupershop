<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($hash)
    {
        $category = Category::where('hash', $hash)->first();
        $data['title'] = $category->title;

        $data['products'] = Product::where('categories_id', $category->id)->get();

        return view('pages/category', $data);
    }
}
