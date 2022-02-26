<?php

namespace App\Http\Controllers;

use App\Models\postcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PostcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategories = postcategory::orderBy('created_at', 'DESC')->paginate('10');
        return view('admin.postcategory.category', compact('allcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.postcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data insert
        $postcategory = new postcategory;
        $postcategory->name = $request->name;
        $postcategory->slug = Str::slug($request->name, '-');
        $postcategory->description = $request->description;
        $postcategory->save();
        // $postcategory = postcategory::create([
        //     'name' => $request->name,
        //     'slug' => Str::slug($request->name, '-'),
        //     'description' => $request->description,
        // ]);
        Session::flash('success', 'Category created successfully');
        // return back()->with('success', 'Category created successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function show(postcategory $postcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(postcategory $postcategory)
    {
        return view('admin.postcategory.edit', ['postcategory' => $postcategory], compact('postcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postcategory $postcategory)
    {
        $postcategory->name = $request->name;
        $postcategory->slug = Str::slug($request->name, '-');
        $postcategory->description = $request->description;
        $postcategory->save();
        Session::flash('success', 'Category updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(postcategory $postcategory, $id)
    {
        $del= postcategory::where('id',$id)->delete();
        if ($del) {
            Session::flash('success', 'Category Deleted successfully');
            return redirect()->route('post-category.index');
        }else{
            echo 'Oh no! There is an error.';
        }
    }
}
