<?php
namespace App\Http\Controllers\External;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Contact_email;
use Auth;
use Mail;
use DB;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PagesController extends Controller
{
    public function home(){
        // $base_uri = 'lists/top/destinations?origincountry=us&topdestinations=8&lookbackweeks=2';
        
        // $args['data'] = $this->call_api_post($base_uri);
        // $args['destinations'] = $args['data']->Destinations; 
        //dd($args['destinations']);
        //Popular Destinations
        //return view('flight_search')->with($args);
        
      
        return view('index');//->with($args);
    }


    public function contact(){        
        return view('contact');
    }
    public function faq(){        
        return view('faq');
    }
    public function contact_email(Request $request){
        try {
        if (Auth::check()) {
                if (isset($request->email)) {
                $store = new Contact_email;
                $store->full_name =$request->full_name;
                $store->email =$request->email;
                $store->phone =$request->phone;
                $store->message_description =$request->message_description;
                $store->subject_description =$request->subject_description;
                if ($store->save()){
                    if (isset($store)) {            
                        Mail::send('emails.contact_email',['email_data'=>$store] , function ($message) use($store){
                          $message->from($store['email'], 'Contact Email - Abyaat');
                          $message->to(env('MAIL_USERNAME'))->subject('Abyaat - Contact Email');
                        });
                    }       
                    return \Response()->Json([ 'status' => 200,'msg'=>'You Have Successfully Send The Email']);
                }else{
                    return \Response()->Json([ 'status' => 202, 'msg'=>'Something Went Wrong, Please Try Again!']);
                }
            }else{
                    return \Response()->Json([ 'status' => 203, 'msg'=>'Please Provide The Email Address!']);
            }
        }
        } catch (QueryException $e) {
            return \Response()->Json([ 'array' => $e]);
        }
    }
    
    public function about(){
        return view('aboutus');
    } 
    public function hotels(){
        $base_uri = 'v1.0.0/shop/hotels/description?mode=description';
        
        $args['data'] = $this->call_api_post($base_uri);
        $args['hotels'] = $args['data']->GetHotelDescriptiveInfoRS->HotelDescriptiveInfos; 
        //dd($args['hotels']);
        return view('hotels')->with($args);
    }
    public function select_room(){
        return view('selectroom');
    } 
    public function hotel_payment(){
        return view('hotel_payment');
    }
    public function confirmation(){
        return view('confirmation');
    } 
    public function flight_search(){
        return view('flight_search');
    } 
    public function privacy(){
        return view('privacy');
    }
}