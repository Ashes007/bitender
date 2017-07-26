<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmailTemplate;

class EmailTemplates extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	$data['record_list'] = EmailTemplate::paginate($perpage);
    	return view('admin.emailtemplate.list',$data);
    }

    public function add()
    {
    	return view('admin.emailtemplate.add');
    }

    public function store(Request $request)
    {

    	$template 	= new EmailTemplate;

    	$this->validate($request,[
    		'template_name'		=> 'required',
    		'subject' 		  => 'required'
    	]);
   	
    	$template->template_name 	= $request->template_name;
    	$template->from_address 	= $request->from_address;
    	$template->subject 		    = $request->subject;
    	$template->message 	        = $request->message;
    	$template->save();

    	return redirect()->route('emailtemplate')->with('message','Record Added Successfully');
    }

    public function edit($id)
    {
    	$data['record'] 	= EmailTemplate::find($id) ;
    	return view('admin.emailtemplate.edit',$data);
    }

    public function update(Request $request,$id)
    {
    	$template = EmailTemplate::find($id) ;
    	
    	$this->validate($request,[
    		'template_name'		=> 'required',
    		'subject' 		=> 'required'
    	]);
   	
    	$template->template_name 	= $request->template_name;
    	$template->from_address 	= $request->from_address;
    	$template->subject 		    = $request->subject;
    	$template->message         	= $request->message;

    	$template->save();

    	return redirect()->route('emailtemplate')->with('message','Record Updated Successfully');
    }

    public function delete($id)
    {
        EmailTemplate::where('id',$id)->delete();
        return redirect()->route('emailtemplate')->with('message','Record Deleted Successfully');
    }
}
