<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Product;
use App\Promise;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home ()
    {
        //dd('Hello');
        $promises = Promise::all(['title', 'description', 'image_path']);
        $gallery = Gallery::all();
        $products = Product::all();
        return view('pages.home', compact('promises', 'gallery', 'products'));
    }
}
