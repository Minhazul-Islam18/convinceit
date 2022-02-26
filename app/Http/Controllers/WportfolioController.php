<?php

namespace App\Http\Controllers;

use notify;
use App\Models\w_category;
use App\Models\wportfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Session;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class WportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Website Portfolios');
        $wportfolio = wportfolio::orderBy('created_at', 'DESC')->paginate('10');
        return view('admin.wportfolio.post', compact('wportfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        SEOMeta::setTitle('Website Portfolio - Create New!');
        $categories = w_category::all();
        return view('admin.wportfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);

             
                 
        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/portfolio_images/', $name);  
               $data[] = $name;  
           }
        }
        $post = new wportfolio();
        $post->name = $request->ProjectName;
        $post->client = $request->client;
        $post->project_date = $request->project_date;
        $post->project_url = $request->project_url;
        $post->category_id = $request->category_id;
        $post->slug = Str::slug($request->name, '-');
        $post->image=json_encode($data);

        if ($request->file('featured_image')) {
            $fname=$request->file('featured_image');
            $ext= $request->file('featured_image')->getClientOriginalName();
            $fname ->move('/website/images/portfolio_images/');  
        }
        $post->featured_image=$ext;
        $post->description = $request->description;
        $post->published_at = now();
        $post->save();
        if ($post->save()) {
            // Session::flash('success', 'Portfolio created successfully');
            notify()->success('Portfolio created successfully');
            // drakify('success');
            // return back()->with('success', 'Category created successfully!');
            return redirect()->route('wportfolio.index');
           } else {
              echo 'no';
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wportfolio  $wportfolio
     * @return \Illuminate\Http\Response
     */
    public function show(wportfolio $wportfolio)
    {
        $data = wportfolio::all();
        // dd($data);
        return view('includes.website_portfolio', ['portfolio' => $data], compact(['wportfolio','data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wportfolio  $wportfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(wportfolio $wportfolio)
    {
        $categories = wportfolio::all();
        return view('admin.wportfolio.edit', ['wportfolio' => $wportfolio], compact('wportfolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wportfolio  $wportfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wportfolio $wportfolio)
    {
        
        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/portfolio_images/', $name);  
               $data[] = $name;  
           }
        }
        $wportfolio->client = $request->client;
        $wportfolio->name = $request->ProjectName;
        $wportfolio->project_date = $request->project_date;
        $wportfolio->project_url = $request->project_url;
        $wportfolio->category_id = $request->category_id;
        $wportfolio->slug = Str::slug($request->name, '-');
        if ($request->file('featured_image')) {
            $fname=$request->file('featured_image');
            $ext= $request->file('featured_image')->getClientOriginalName();
            $fname ->move('/website/images/portfolio_images/');  
        }
        $wportfolio->featured_image=$ext;
        $wportfolio->image=json_encode($data);
        $wportfolio->description = $request->description;
        $wportfolio->published_at = now();
        $wportfolio->save();
        if ($wportfolio->save()) {
            Session::flash('success', 'Portfolio created successfully');
            // return back()->with('success', 'Category created successfully!');
            return redirect()->route('wportfolio.index');
           } else {
              echo 'no';
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wportfolio  $wportfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(wportfolio $wportfolio, $id)
    {
        $del= wportfolio::where('id',$id)->delete();
        if ($del) {
            Session::flash('success', 'Portfolio Deleted successfully');
            return redirect()->route('wportfolio.index');
        }else{
            echo 'Oh no! There is an error.';
        }
    }
}
