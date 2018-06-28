<?php
namespace App\Http\Controllers\External;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
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