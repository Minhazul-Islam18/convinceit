<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\g_category;
use App\Models\post;
use App\Models\postcategory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('created_at', 'DESC')->paginate('10');
        return view('admin.post.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = postcategory::all();
        return view('admin.post.create', compact('categories'));
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
        // $path = $request->file('image');
        // $image = $path->getClientOriginalName();
        // $path->move(public_path('website/images/post_images'), $image);

        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/post_images/', $name);  
               $data[] = $name;  
           }
        }
        $post = new post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = Str::slug($request->name, '-');
        $post->image=json_encode($data);
        $post->description = $request->description;
        $post->published_at = now();
        $post->save();
    //     $tag = post::create([
    //         'title' => $request->title,
    //         'category_id' => $request->category_id,
    //         // 'user_id' => auth()->user()->id,
    //         'author_id' => '10',
    //         'slug' => Str::slug($request->name, '-'),
    //         'image' => image=json_encode($data),
    //         'description' => 'jhdfbkj',
    //         'published_at' => now(),
    //     ]);
       if ($post->save()) {
        Session::flash('success', 'Post created successfully');
        // return back()->with('success', 'Category created successfully!');
        return redirect()->back();
       } else {
          echo 'no';
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = g_category::all();
        return view('admin.post.edit', ['post' => $post], compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/website/images/post_images/', $name);  
               $data[] = $name;  
           }
        }
        // print $data;
        // dd(request()->all());
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = Str::slug($request->name, '-');
        $post->image=json_encode($data);
        $post->description = 'description';
        $post->published_at = now();
        $post->save();
        if ($post->save()) {
            Session::flash('success', 'Post Updated successfully');
            // return back()->with('success', 'Category created successfully!');
            return redirect()->route('post.index');
           } else {
              echo 'no';
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post, $id)
    {
        $del= post::where('id',$id)->delete();
        if ($del) {
            Session::flash('success', 'Post Deleted successfully');
            return redirect()->route('post.index');
        }else{
            echo 'Oh no! There is an error.';
        }
    }
}
