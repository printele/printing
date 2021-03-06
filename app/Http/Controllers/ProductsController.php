<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ProductsController extends Controller
{
    protected $destinationPath = 'images/products';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all(['id', 'name', 'image_path', 'description']);

        return view('superadmin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.products.new_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
           'name' => 'required',
           'image' => 'required',
           'description' => 'required',
           'formate' => 'required',
           'print' => 'required',
           'paper' => 'required',
           'quantity' => 'required',
        ]);

        $file = $request->file('image');

        $file_name = $file->getClientOriginalName();

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image_path = $this->destinationPath . '/' . $file_name;
        $product->format = $request->formate;
        $product->print = $request->print;
        $product->papers = $request->paper;

        if ($product->save()) {
            $file->move($this->destinationPath, $file_name);

            return redirect()->back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}
