<?php

namespace App\Http\Controllers;

use notify;
use App\Models\w_category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class WCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // notify()->success('Here all website category!');
        smilify('success', 'Here all website category!');
        $w_categories = w_category::orderBy('created_at', 'DESC')->paginate('10');
        $wd= w_category::pluck('id')->all();
        $wid = w_category::whereIn('id',$wd)->get();
        //$id= w_category::all()->first();
       return view('admin.category.category',['wid' => $wid], compact('w_categories', 'wid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
        // $w_category = new w_category;
        // $w_category->name = $request->name;
        // $w_category->description = $request->description;
        // $w_category->save();
        $w_category = w_category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);
        notify()->success('Category created successfully!');
        // Session::flash('success', 'Category created successfully');
        // return back()->with('success', 'Category created successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\w_category  $w_category
     * @return \Illuminate\Http\Response
     */
    public function show(w_category $w_category)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\w_category  $w_category
     * @return \Illuminate\Http\Response
     */
    public function edit(w_category $w_category, $id)
    {   
        $wh=[
            'id'=>$id
        ];
        $data['w_cat'] = DB::table('w_categories')->where($wh)->get();
        // $w_category = w_category::all();
        // return $w_cat;
        return view('admin.category.edit', $data, compact('w_category','data')) ->with('id' ,$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\w_category  $w_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, w_category $w_category)
    {
        // dd($request)->all();
        $w_category->name = $request->name;
        $w_category->slug = Str::slug($request->name, '-');
        $w_category->description = $request->description;
        $w_category->save();
        Session::flash('success', 'Category updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\w_category  $w_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(w_category $w_category, $id)
    {
        // if ($w_category) {
        //   $w_category->delete();
        //   Session::flash('success', 'Category Deleted successfully');
        //   return redirect()->route('category.index');
        // }
        // echo $id;
        $del= w_category::where('id',$id)->delete();
        if ($del) {
            Session::flash('success', 'Category Deleted successfully');
            return redirect()->route('category.index');
        }else{
            echo 'Oh no! There is an error.';
        }
       
    }
}
