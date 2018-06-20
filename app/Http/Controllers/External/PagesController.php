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

class PagesController extends Controller
{
    public function home(){
        return view('index');
    } 
    public function contact(){
        return view('contact');
    } 
    public function about(){
        return view('aboutus');
    } 
    public function hotels(){
        return view('hotels');
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