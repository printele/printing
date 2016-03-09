<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SuperAdminPageController extends Controller
{
    //
    public function index()
    {
        return view('superadmin.login');
    }

    public function products()
    {


    }

    public function doSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);



    }

}
