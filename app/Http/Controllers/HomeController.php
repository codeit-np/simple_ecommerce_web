<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == "admin"){
                return view('admin.app');
            }else if(Auth::user()->role == "customer"){
                return redirect('/');
            }else{
                return redirect("/");
            }
        }

    }
}
