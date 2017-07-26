<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AttributeValue;
use App\Attribute;

class AttributeValueController extends Controller
{
    public function index(Request $request)
    {
        $perpage = 10;
    	$data['attributevalue_list'] = AttributeValue::paginate($perpage);
        $data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.attributevalue.list',$data);
    }

    public function add()
    {
    	$data['attribute_list'] = Attribute::pluck('attribute_name','id');
    	return view('admin.attributevalue.add',$data);
    }

    public function store(Request $Request)
    {

    	$this->validate($Request, [
	        'attribute_id' => 'required',
	        'attribute_value' => 'required',
	    	]
	   
	    );

    	$attributevalue = new AttributeValue;

    	$attributevalue->attribute_id 		= $Request->attribute_id;
    	$attributevalue->attribute_value 	= $Request->attribute_value;
    	$attributevalue->save();

    	return redirect('admin/attributevalue')->with('message','Record Added Successfully');
    }

    public function edit($id)
    {
    	$data['record'] = AttributeValue::find($id);
    	$data['attribute_list'] = Attribute::pluck('attribute_name','id');
    	return view('admin.attributevalue.edit',$data);	
    }

    public function update(Request $Request,$id)
    {
    	$attributevalue = AttributeValue::find($id);

    	$this->validate($Request, [
	        'attributes_id' 	=> 'required',
	        'attribute_value' 	=> 'required',
	    	]
	    );

    	$attributevalue->attribute_id 		= $Request->attributes_id;
    	$attributevalue->attribute_value 	= $Request->attribute_value;
    	$attributevalue->save();

    	return redirect('admin/attributevalue')->with('message','Record Updated Successfully');
    }

    public function delete($id)
    {
        AttributeValue::where('id',$id)->delete();
        return redirect('admin/attributevalue')->with('message','Record Deleted Successfully');
    }
}
