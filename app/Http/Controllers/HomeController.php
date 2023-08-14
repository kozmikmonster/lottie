<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{
    //
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {

        return Setting::first();
    }



    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }




    public function menu()
    {
        return view('home.menu');
    }


    public function about()
    {
        return view('home.about');
    }


    public function book()
    {
        return view('home.book');
    }

    public function blank()
    {
        return view('home.blank');
    }



    public function login()
    {
        return view('admin.login');
    }


    public function show()
    {
        return view('profile.show');
    }





    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('home');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('home');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }

    }

}





