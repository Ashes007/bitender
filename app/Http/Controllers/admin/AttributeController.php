<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attribute;

class AttributeController extends Controller
{
    public function index(Request $request)
    {
        $perpage = 10;
    	$data['attribute_list'] = Attribute::paginate($perpage);
        $data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.attribute.list',$data);
    }

    public function add()
    {

    	return view('admin.attribute.add');
    }

    public function store(Request $Request)
    {

    	$this->validate($Request, [
	        'attribute_name' => 'required|unique:attributes',
		    ],
		    [
		    	'attribute_name.unique'	=> 'Attribute already exists'
		    ]
	    );

    	$attribute = new Attribute;

    	$attribute->attribute_name 	= $Request->attribute_name;
    	$attribute->save();

    	return redirect('admin/attribute')->with('message','Record Added Successfully');
    }

    public function edit($id)
    {
    	$data['record'] = Attribute::find($id);
    	return view('admin.attribute.edit',$data);	
    }

    public function update(Request $Request,$id)
    {
    	$attribute = Attribute::find($id);

    	$this->validate($Request, [
	        'attribute_name' => 'required|unique:attributes,attribute_name,'.$id.',id',
		    ],
		    [
		    	'attribute_name.unique'	=> 'Attribute Code already exists'
		    ]
	    );

    	$attribute->attribute_name = $Request->attribute_name;
    	$attribute->save();

    	return redirect('admin/attribute')->with('message','Record Updated Successfully');
    }

    public function delete($id)
    {
        Attribute::where('id',$id)->delete();
        return redirect('admin/attribute')->with('message','Record Deleted Successfully');
    }
}
