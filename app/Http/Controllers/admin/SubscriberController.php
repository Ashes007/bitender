<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Mail;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {
    	$perpage = 10;
    	$data['record_list'] = Subscriber::paginate($perpage);
    	$data['sl_no'] = ($request->input('page', 1) - 1) * $perpage;
    	return view('admin.subscriber.list',$data);
    }

    public function sendnewsletter()
    {
    	$data['subscriber_list'] = Subscriber::where('status','Active')->get();
    	return view('admin.subscriber.send',$data);
    }

    public function send(Request $request)
    {
    	$this->validate($request,[
    			'subscriber' => 'required'
    		]);

    	$subscriber 	= $request->subscriber;
    	$subject		= $request->subject;
    	$message 		= $request->message;

    	foreach ($subscriber as $key => $email) {
    		# code...
    	
	    	$emaildata['from_email'] = 'response799@gmail.com';
			$emaildata['form_name'] = 'From My Site';
			$emaildata['to_email'] = $email;
			$emaildata['to_name'] = 'Dear Subscriber';
			$emaildata['subject'] = $subject;
			
			$emailHtml['name']	= 'Dear Subscriber';
			$emailHtml['msg'] 	= $message;
			                    
			                        
			Mail::send('emails.mail_view', $emailHtml, function ($message) use ($emaildata) {
			$message->from($emaildata['from_email'], $emaildata['form_name']);
			$message->subject($emaildata['subject']);
			$message->to($emaildata['to_email'] );
			});

		}

		return redirect()->route('newsletter_send')->with('message','Mail Send Successfully');

 	}

    public function delete($id)
    {
        Subscriber::find($id)->delete();
        return redirect()->route('subscriber')->with('message','Record Delete Successfully');
    }

    public function status($id,$status)
    {

        $data = Subscriber::find($id);
        $data->status = ($status == 'Active')?'Inactive':'Active';
        $data->save();
        return redirect()->route('subscriber')->with('message','Status changed Successfully');
    }



}
