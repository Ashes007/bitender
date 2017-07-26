<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Slug;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['category_list'] = Category::paginate($perpage);
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.category.list',$data);
    }

    public function add()
    {
    	$data['category_list'] = Category::where('id', '!=', 'parent_id')->get();

    	return view('admin.category.add',$data);
    }

    public function store(Request $request)
    {
    	$category = new Category;
        $slug = new Slug;
        $this->validate($request,['category_name' => 'required|unique:categories,name']);

    	$category->name 		= $request->category_name;
        $category->slug         = $slug->createSlug($request->category_name,'Category');
    	$category->parent_id 	= $request->parent_id;
    	$category->status 		= $request->status;
    	$category->save();
    	return redirect()->route('category');
    }

    public function edit($id)
    {
        $category_list      =   Category::where('id', '!=', 'parent_id')->get();
        $record             =   Category::find($id);
        return view('admin.category.edit',compact('category_list','record'));
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $slug = new Slug;

        $this->validate($request,['name' => 'required|unique:categories,name,'.$id.',id']);

        $category->name         = $request->name;
        $category->slug         = $slug->createSlug($request->name,'Category', $id);
        $category->parent_id    = $request->parent_id;
        $category->status       = $request->status;
        $category->save();
        return redirect()->route('category');
    }
}
