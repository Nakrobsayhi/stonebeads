<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::paginate(8);
        return view('frontend.index', compact('product')); // Pass news items to index view
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function shop()
    {
        $product = Product::paginate(12);
        return view('frontend.shop', compact('product'));
    }

}
