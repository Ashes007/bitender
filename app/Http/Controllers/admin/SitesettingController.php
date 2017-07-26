<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Slug;
use App\Sitesetting;

class SitesettingController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['record_list'] = Sitesetting::paginate($perpage);
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.sitesetting.list',$data);
    }

    public function add()
    {
    	return view('admin.sitesetting.add');
    }

    public function store(Request $request)
    {
    	$sitesetting = new Sitesetting;
    	$slug = new Slug;

    	$this->validate($request,[
    			'name' 	=> 'required',
    			'value' => 'required'
    	]);

    	$sitesetting->name 		= $request->name;
    	$sitesetting->label 	= $slug->createSlug($request->category_name,'Sitesetting','0','label');
    	$sitesetting->value 	= $request->value;
    	$sitesetting->save();

    	return redirect()->route('sitesetting')->with('message','Record Added Successfully');
    }

    public function edit(Request $request,$id)
    {
    	$data['record'] = Sitesetting::find($id);

    	return view('admin.sitesetting.edit',$data);
    }

    public function update(Request $request,$id)
    {
    	$sitesetting = Sitesetting::find($id);
    	$slug = new Slug;

    	$this->validate($request,[
    			'name' 	=> 'required',
    			'value' => 'required'
    	]);

    	$sitesetting->name 		= $request->name;
    	$sitesetting->label 	= $slug->createSlug($request->category_name,'Sitesetting',$id,'label');
    	$sitesetting->value 	= $request->value;
    	$sitesetting->save();

    	return redirect()->route('sitesetting')->with('message','Record Updated Successfully');

    }
}
