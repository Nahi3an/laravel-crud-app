<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Builder\Function_;

class UserAuthController extends Controller
{

    public function login()
    {

        return view('users.login');
    }

    public function register()
    {

        return view('users.register');
    }

    public function create(Request $request)
    {

        $request->validate([
            'username' => 'required|max:8|string',
            'email' => 'required|email|unique:users|string',
            'password' => 'required|min:4|string'
        ]);


        $test = User::create([
            'name' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        if (!$test) {
            App:
            abort(500, 'some errorr');
        } else {

            return redirect('/user/login');
        }
    }

    public function verify(Request $request)
    {


        $request->validate([
            'username' => 'required|max:8|string',
            'password' => 'required|min:4|string'
        ]);


        $user = User::where('name', $request->username)->first();



        if (!$user) {

            // return back()->with('fail', 'No account found');
            return back()->with('fail', 'No account found');
        } else {

            if (Hash::check($request->password, $user->password)) {

                $request->session()->put('user_id', $user->id);

                return redirect()->route('user.profile');
            } else {

                return back()->with('fail', 'Invalid password');
            }
        }
    }




    public function profile()
    {

        if (session()->has('user_id')) {

            $user = User::where('id', session('user_id'))->first();

            return view('users.profile', ['loggedUser' => $user]);
        } else {

            return redirect()->route('user.login');
        }
    }

    public function logout()
    {
        if (session()->has('user_id')) {

            session()->pull('user_id');

            return redirect()->route('user.login');
        }
    }
}