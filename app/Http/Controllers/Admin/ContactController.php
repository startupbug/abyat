<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AnalyticsController;
use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
use App\Contact_email;

class ContactController extends Controller
{
	public function contact_email(){
		$emails = Contact_email::get();
		return view ('admin.contact.email')->with('emails',$emails);
	}  
	public function admin_reply_email(Request $request){
		$email_data['email'] = $request->email;
		$email_data['full_name'] = $request->full_name;
		$email_data['subject_description'] = $request->subject_description;
		$email_data['reply_description'] = $request->reply_description;
		if (isset($email_data['email'])) {    		
			
			$send_email =  Mail::send('emails.reply_email',['email_data'=>$email_data] , function ($message) use($email_data){
				$message->from('johndoe.john191@gmail.com', 'Contact Email - Abyaat');
				$message->to($email_data['email'])->subject('Abyaat - Contact Email Reply');      	
			});
			$this->set_session('You Have Successfully Replied To This Email',true);
			return redirect()->back();
		}else{
			$this->set_session('Something Went Wrong, Please Try Again With Complete Data',false);
			return redirect()->back();
		}
	}
}
