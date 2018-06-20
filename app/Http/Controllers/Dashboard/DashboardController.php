<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;
use Mail;
use DB;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard.myaccount');
    } 
}