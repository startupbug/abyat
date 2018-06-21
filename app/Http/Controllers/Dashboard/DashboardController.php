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
use Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard.myaccount');
    }
    public function mybooking(){
        return view('dashboard.mybooking');
    }
    public function setting(){
        return view('dashboard.setting');
    } 
    public function update_password(Request $request,$id){    	
        $user_info = User::select('password')->where('id',$id)->first();       
        if (Hash::check($request->old_password, $user_info['password'])) {
            if($request->password === $request->password_confirmation){
                $user = User::where('id',$id)->update([
                'password' => bcrypt($request->password)
                ]);
                if($user){
                $this->set_session('Your Password Is Updated Succesfully',true);                
                return redirect()->back();
                }
                else{
				$this->set_session('Your Password Is Not Updated Succesfully',false);                
                return redirect()->back();
                }
            }
            else{    
            $this->set_session('Password And Confirmation Password Do Not Matched',false);
            session::flash('err_message','Password And Confirmation Password Do Not Matched');
                return redirect()->back();
            }
        }
        else{
            session::flash('err_message','Pl');
                return redirect()->back();
        }
    }

    public function update_user_info(Request $request,$id){ 
    try {
            if (isset($id)){              
            $update_user_details = DB::table('users')
                ->where('id',$id)
                ->update([
                    'name_title' => $request->get('name_title'),
                    'name' => $request->get('name'),
                    'middle_name' => $request->get('middle_name'),
                    'last_name' => $request->get('last_name'),
                    'email' => $request->get('email') 
            ]);
            $update_profile_details = DB::table('profiles')
                ->where('user_id',$id)
                ->update([
                    'username' => $request->get('username'),
                    'zip_code' => $request->get('zip_code'),
                    'city' => $request->get('city'),
                    'country' => $request->get('country'),
                    'secondary_address' => $request->get('secondary_address'),
                    'phone_code' => $request->get('phone_code'),
                    'address' => $request->get('address'),
                    'phone' => $request->get('phone') 
            ]);
            $this->set_session('You Have Succesfully Updated Your Info', true);
            return redirect()->route('dashboard');          
            }else{
                $this->set_session('Please Give The Required Data', false);
                return redirect()->back();
            }
        } catch (QueryException $e) {
            return \Response()->Json([ 'array' => $e]);
        }     
        
    }
}