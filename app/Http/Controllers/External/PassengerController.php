<?php
namespace App\Http\Controllers\External;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Passenger_detail;
use App\Purchaser_contact_detail;
use Auth;
use DB;

class PassengerController extends Controller
{
    public function submit_passenger_info(Request $request){
    	try {   		
	   		foreach ($request->firstname as $key => $value) {
	   			$store = new Passenger_detail;
	   			$store->user_id = Auth::user()->id;
	   			$store->tag_id = $request->tag_id;
	   			$store->firstname = $value;
	   			$store->middlename = $request->middlename[$key];
	   			$store->lastname = $request->lastname[$key];
	   			$store->passport_option = $request->passport_option[$key];
	   			$store->frequest_number = $request->frequest_number[$key];
	   			$store->title = $request->title[$key];
	   			$store->save();
	   		} 
	   		$contact_person_store = new Purchaser_contact_detail;
   			$contact_person_store->user_id = Auth::user()->id;
   			$contact_person_store->tag_id = $request->tag_id;
   			$contact_person_store->title = $request->contact_person_title;
   			$contact_person_store->first_name = $request->first;
   			$contact_person_store->middle_name = $request->middle;
   			$contact_person_store->email = $request->email;
   			$contact_person_store->mobile_number = $request->mobile;
   			$contact_person_store->flyer_number = $request->contact_person_flyer_number;
   			$contact_person_store->save();
   			$this->set_session('Info Saved Successfully',true);
	   		return redirect()->back();
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}  
    }
}