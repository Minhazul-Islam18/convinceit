<?php

namespace App\Http\Controllers;

use notify;
use App\Models\g_category;
use App\Models\w_category;
use App\Models\wportfolio;
use Illuminate\Http\Request;
use App\Models\GraphicPortfolio;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOMeta;
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
    public function webprof(wportfolio $id)
    {
        // SEOMeta::setTitle('Website Portfolio');
        // $webprof = wportfolio::all();
        // $webcat = w_category::all();
        //$data = wportfolio::find($id)->first();
      //$data = wportfolio::all();
      $data = DB::table('wportfolios')->where('id', $id->id)->first();
      //dd($data);
    return view('includes.website_portfolio', ['portfolio' => $data], compact(['data']));
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
