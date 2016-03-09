<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doSignin(Request $request)
    {
        $this->validate($request, [
            'lemail' => 'required',
            'lpassword' => 'required'
        ]);

        if (!Auth::attempt(['email' => $request->lemail, 'password' => $request->lpassword], $request->has('remember'))) {
            return redirect()->back()->withInfo('Wrong email and password!');
        }

        return redirect()->route('customer.index');

    }

    public function doSignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'business_name' => 'min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'address' => 'required|min:5',
            'location' => 'required|min:3',
            'phone_number' => 'required|min:10'
        ]);

        //dd($request->except(['_token', 'password_confirmation']));

        $user = new User();
        $user->name = $request->name;
        $user->business_name = $request->business_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->location = $request->location;
        $user->phone_number = $request->phone_number;

        if (!$user->save()) {

            return redirect()->back()->withReg("Oops! Something when terrible wrong");
        } else {
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('customer.index');
        }
    }


    public function doSignout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

}
