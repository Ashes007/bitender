<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ContactUs;
use Mail;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['record_list'] = ContactUs::paginate($perpage);
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.contactus.list',$data);
    }

    public function reply($id)
    {
    	$data['info'] = ContactUs::where('id',$id)->first();
    	return view('admin.contactus.send',$data);
    }

    public function reply_submit(Request $request,$id)
    {
    	$this->validate($request,[
    			'subject' => 'required'
    		]);
    	$info = ContactUs::where('id',$id)->first();

    	$email 			= $info->email;
    	$name 			= $info->name;
    	$subject		= $request->subject;
    	$message 		= $request->message;

  
    		# code...
    	
	    	$emaildata['from_email'] = 'response799@gmail.com';
			$emaildata['form_name'] = 'From My Site';
			$emaildata['to_email'] = $email;
			$emaildata['to_name'] = $name;
			$emaildata['subject'] = $subject;
			
			$emailHtml['name']	= 'Hello '.$name;
			$emailHtml['msg'] 	= $message;
			                    
			                        
			Mail::send('emails.mail_view', $emailHtml, function ($message) use ($emaildata) {
			$message->from($emaildata['from_email'], $emaildata['form_name']);
			$message->subject($emaildata['subject']);
			$message->to($emaildata['to_email'] );
			});

		
		return redirect()->route('contactus')->with('message','Mail Send Successfully');

 	}
}
