<?php

namespace App\Http\Controllers;

use App\Models\g_category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GraphicPortfolio;
use Artesaos\SEOTools\Facades\SEOMeta;

class GraphicPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphicportfolio = GraphicPortfolio::orderBy('created_at', 'DESC')->paginate('10');
        return view('admin.GraphicPortfolio.post', compact('graphicportfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        SEOMeta::setTitle('Graphic Portfolio - Create New!');
        // $categories = GraphicPortfolio::all();
        $categories = g_category::all();
        return view('admin.GraphicPortfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/graphic-demo/', $name);  
               $data[] = $name;  
           }
        }
        $post = new GraphicPortfolio();
        $post->title = $request->title;
        $post->project_date = $request->project_date;
        $post->project_url = $request->project_url;
        $post->category_id = $request->category_id;
        $post->slug = Str::slug($request->name, '-');
        $post->image=json_encode($data);

        if ($request->file('featured_image')) {
            $fname=$request->file('featured_image');
            $ext= $request->file('featured_image')->getClientOriginalName();
            $fname ->move('/website/images/graphic-demo/');  
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
            return redirect()->route('graphicportfolio.index');
           } else {
            notify()->success('Oops! There is an Error.');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraphicPortfolio  $graphicPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(GraphicPortfolio $graphicPortfolio)
    {
        $data = GraphicPortfolio::all();
        // dd($data);
        return view('includes.graphic_portfolio', ['portfolio' => $data], compact(['graphicPortfolio','data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraphicPortfolio  $graphicPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(GraphicPortfolio $graphicPortfolio)
    {
        $categories = GraphicPortfolio::all();
        return view('admin.GraphicPortfolio.edit', ['GraphicPortfolio' => $graphicPortfolio], compact('GraphicPortfolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraphicPortfolio  $graphicPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraphicPortfolio $graphicPortfolio)
    {
                        
        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/graphic-demo/', $name);  
               $data[] = $name;  
           }
        }
        $graphicPortfolio->title = $request->title;
        $graphicPortfolio->project_date = $request->project_date;
        $graphicPortfolio->project_url = $request->project_url;
        $graphicPortfolio->category_id = $request->category_id;
        $graphicPortfolio->slug = Str::slug($request->name, '-');
        $graphicPortfolio->image=json_encode($data);

        if ($request->file('featured_image')) {
            $fname=$request->file('featured_image');
            $ext= $request->file('featured_image')->getClientOriginalName();
            $fname ->move('/website/images/graphic-demo/');  
        }
        $graphicPortfolio->featured_image=$ext;
        $graphicPortfolio->description = $request->description;
        $graphicPortfolio->published_at = now();
        $graphicPortfolio->save();
        if ($graphicPortfolio->save()) {
            // Session::flash('success', 'Portfolio created successfully');
            notify()->success('Portfolio Updated successfully');
            // drakify('success');
            // return back()->with('success', 'Category created successfully!');
            return redirect()->route('graphicportfolio.index');
           } else {
            notify()->success('Oops! There is an Error.');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraphicPortfolio  $graphicPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraphicPortfolio $graphicPortfolio)
    {
        //
    }
}
