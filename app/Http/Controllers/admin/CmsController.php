<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Slug;
use App\Cms;

class CmsController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	$data['record_list'] = Cms::paginate($perpage);
    	return view('admin.cms.list',$data);
    }

    public function add()
    {
    	return view('admin.cms.add');
    }

    public function store(Request $request)
    {

    	$cms 	= new Cms;
    	$slug 	= new Slug;

    	$this->validate($request,[
    		'page_name'		=> 'required',
    		'title' 		=> 'required',
    		'description' 	=> 'required'
    	]);
   	
    	$cms->page_name 	= $request->page_name;
    	$cms->title 		= $request->title;
    	$cms->slug 			= $slug->createSlug($request->category_name,'Cms');
    	$cms->short_desc 	= $request->short_desc;
    	$cms->description 	= $request->description;
    	$cms->status 		= $request->status;

    	$cms->save();

    	return redirect()->route('cms')->with('Record Added Successfully');
    }

    public function edit($id)
    {
    	$data['record'] 	= Cms::find($id) ;
    	return view('admin.cms.edit',$data);
    }

    public function update(Request $request,$id)
    {
    	$cms = Cms::find($id) ;

    	$slug 	= new Slug;
    	
    	$this->validate($request,[
    		'page_name'		=> 'required',
    		'title' 		=> 'required',
    		'description' 	=> 'required'
    	]);
   	

    	$cms->title 		= $request->title;
    	$cms->slug 			= $slug->createSlug($request->category_name,'Cms',$id);
    	$cms->short_desc 	= $request->short_desc;
    	$cms->description 	= $request->description;
    	$cms->status 		= $request->status;

    	$cms->save();

    	return redirect()->route('cms')->with('Record Updated Successfully');

    }
}
