<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


    public function index()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $username = $request->input('name');
        $password = $request->input('password');
        $user = User::where('name', $username)->first();

        if ($user && password_verify($password, $user->password)) {
            // Credentials are correct, you can redirect to a different view or perform some actions here.
            $Home = Home::all();
            return view('frontend.home', ['Home' => $Home]);
        } else {
            // Incorrect username or password, show an error message.
            return view('frontend.login')->with('error', 'Incorrect username or password');
        }
    }
}