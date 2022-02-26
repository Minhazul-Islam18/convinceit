<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\g_category;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class GCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g_categories = g_category::orderBy('created_at', 'DESC') -> paginate('10');
        return view('admin.g_category.category', compact('g_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.g_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          //input validation
        // $this->validate($request,
        // ['name' => 'required|unique:w_categories, name'],
        // );

        //data insert
        // $g_category = new g_category;
        // $g_category->name = $request->name;
        // $g_category->description = $request->description;
        // $g_category->save();
        $g_category = g_category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);
        Session::flash('success', 'Category created successfully');
        return redirect()->back();
        // return back()->with('success','Product successfully added.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\g_category  $g_category
     * @return \Illuminate\Http\Response
     */
    public function show(g_category $g_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\g_category  $g_category
     * @return \Illuminate\Http\Response
     */
    public function edit(g_category $g_category)
    {
        return view('admin.g_category.edit', ['g_category' => $g_category], compact('g_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\g_category  $g_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, g_category $g_category)
    {
        // $this->validate($request,
        // [
        //     'name' => "required|unique:w_categories, name, $g_category->name"
        // ]
        // );
        // dd($request)->all();
        $g_category->name = $request->name;
        $g_category->slug = Str::slug($request->name, '-');
        $g_category->description = $request->description;
        $g_category->save();
        Session::flash('success', 'Category updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\g_category  $g_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(g_category $g_category, $id)
    {
        $del= g_category::where('id',$id)->delete();
        if ($del) {
            Session::flash('success', 'Category Deleted successfully');
            return redirect()->route('category.index');
        }else{
            echo 'Oh no! There is an error.';
        }
    }
}
