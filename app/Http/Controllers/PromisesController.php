<?php

namespace App\Http\Controllers;

use App\Promise;
use Illuminate\Http\Request;

use App\Http\Requests;

class PromisesController extends Controller
{
    protected $destinationPath = 'images/promises';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promises = Promise::all(['id','title', 'description', 'image_path']);
        return view('superadmin.promises.index', compact('promises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.promises.new_promise');
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
           'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $file = $request->file('image');

        $file_name = $file->getClientOriginalName();

        $promise = new Promise();
        $promise->title = $request->title;
        $promise->description = $request->description;
        $promise->image_path = $this->destinationPath . '/' . $file_name;

        if ($promise->save()) {
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
        $promise = Promise::find($id);

        $promise->delete();

        return redirect()->back();
    }


}
