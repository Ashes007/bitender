<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Banner;
use Image;
use File;

class BannerController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['record_list'] = Banner::paginate($perpage);
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.banner.list',$data);
    }

    public function add()
    {
    	return view('admin.banner.add');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'image' => 'required'
    	]);

    	$banner = new Banner;

    	$image = $request->file('image');
        $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();

        $destinationPath = public_path('uploads/banner');
        $thumbPath = public_path('uploads/banner/thumbnails');

        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($thumbPath.'/'.$imagename);       

        $image->move($destinationPath, $imagename);

    	$banner->name 			= $request->name;
    	$banner->banner_text	= $request->banner_text;
    	$banner->image 			= $imagename;
    	$banner->status 		= $request->status;
    	$banner->save();
    	return redirect()->route('banner')->with('message',"Record Added Successfully");
    }

    public function edit($id)
    {
    	$data['record'] = Banner::find($id);
    	return view('admin.banner.edit',$data);
    }

    public function update(Request $request,$id)
    {

    	$banner = Banner::find($id);
    	if(Input::hasFile('image'))
    	{
    		$image = $request->file('image');
	        $imagename = mt_rand(1000,9999)."_".time().".".$image->getClientOriginalExtension();

	        $destinationPath = public_path('uploads/banner');
	        $thumbPath = public_path('uploads/banner/thumbnails');

	        $img = Image::make($image->getRealPath());
	        $img->resize(100, 100, function ($constraint) {
	            $constraint->aspectRatio();
	        })->save($thumbPath.'/'.$imagename);       

	        $image->move($destinationPath, $imagename);
	        $banner->image 			= $imagename;

    	}

    	$banner->name 			= $request->name;
    	$banner->banner_text	= $request->banner_text;    	
    	$banner->status 		= $request->status;
    	$banner->save();
    	return redirect()->route('banner')->with('message',"Record Updated Successfully");
    }


    public function delete($id)
    {
    	$banner = Banner::find($id);
        
        $file1 = 'uploads/banner/'.$banner->image;
        $file2 = 'uploads/banner/thumbnails/'.$banner->image;
        File::delete($file1, $file2);
        $banner->delete();
        return redirect('admin/banner')->with('message','Record Deleted Successfully');
    }
}
