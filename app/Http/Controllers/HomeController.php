<?php

namespace App\Http\Controllers;

use notify;
use App\Models\w_category;
use App\Models\wportfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\g_category;
use App\Models\GraphicPortfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $webprof = wportfolio::all();
        $webcat = w_category::all();
        $graphicprof = GraphicPortfolio::all();
        $graphiccat = g_category::all();
        // dd($data);
        notify()->success('Welcome!');
        return view('index', compact(['webprof', 'webcat','graphicprof','graphiccat']));
    }


    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return view('home');
    }

    public function redirect()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.dashboard');
        } else {
           abort(401, 'Connection Request Failed');
        }
        
    }
}
