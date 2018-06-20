<?php
namespace App\Http\Controllers;
use App\Mail\ForgetPasswordMail;
use App\Mail\EmailVerification;
use App\Events\UserRegistration;
use App\Events\RegisterEvent;
use Illuminate\Http\Request;
use App\Events\UserProfile;
use App\Profile;
use Validator;
use App\User;
use Auth;
use Mail;
use DB;

class AuthenticationController extends Controller
{
    public function login_index(){       
        return view('authentication.login');
    }

    public function login_post(Request $request){
        try{
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ] )) {   
            return redirect()->route('dashboard');
        }else{
            $this->set_session('invalid username or password', false);
            return redirect()->route('signin');
        }
        }catch(\Exception $e){
            $this->set_session('Something went wrong. Please Try again', false);
            return redirect()->route('signin');
        }   
    }

    public function register_post(Request $request){              
      try{
        $user = new User();
        $user->name = $request->input('name');            
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        if($user->save()){ 
            event(new  UserProfile($user));  
            $this->set_session('You Have Successfully Registered.', true);
        }else{
             $this->set_session('User Couldnot be Registered.', false);
        }
         return redirect()->route('signin');
       }
       catch(\Exception $e){
            $this->set_session('User Couldnot be Registered.'.$e->getMessage(), false);
           return redirect()->route('signin');                
       }
    }

    //Logging out user
    public function logout_user(){    
        Auth::logout();
        return redirect()->route('public_index');          
    }    
}
