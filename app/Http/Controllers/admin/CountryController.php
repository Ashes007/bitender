<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $perpage = 10;
    	$data['country_list'] = Country::paginate($perpage);
        $data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.country.list',$data);
    }

    public function add()
    {

    	return view('admin.country.add');
    }

    public function store(Request $Request)
    {

    	$this->validate($Request, [
	        'country_name' => 'required|unique:countries',
	        'country_code' => 'required|unique:countries,country_code',
	        'status' => 'required',
	    ],
	    [
	    	'country_code.unique'	=> 'Country Code already exists'
	    ]
	    );

    	$country = new Country;

    	$country->country_name 	= $Request->country_name;
    	$country->country_code 	= $Request->country_code;
    	$country->status 		= $Request->status;
    	$country->save();

    	return redirect('admin/country')->with('message','Record Added Successfully');
    }

    public function edit($id)
    {
    	$data['record'] = Country::find($id);
    	return view('admin.country.edit',$data);	
    }

    public function update(Request $Request,$id)
    {
    	$country = Country::find($id);

    	$this->validate($Request, [
	        'country_name' => 'required|unique:countries,country_name,'.$id.',id',
	        'country_code' => 'required|unique:countries,country_code,'.$id.',id',
	        'status' => 'required',
	    ],
	    [
	    	'country_code.unique'	=> 'Country Code already exists'
	    ]
	    );

    	$country->country_name = $Request->country_name;
    	$country->country_code = $Request->country_code;
    	$country->status = $Request->status;
    	$country->save();

    	return redirect('admin/country')->with('message','Record Updated Successfully');
    }

    public function delete($id)
    {
        Country::where('id',$id)->delete();
        return redirect('admin/country')->with('message','Record Deleted Successfully');
    }
}
