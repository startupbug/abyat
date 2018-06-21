@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="account">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h3 class="s_user_name">Hi, {{Auth::user()->name}}</h3>
       </div>
     </div>
     <div class="row">
       <div class="col-md-3 col-xs-12">
         <div class="wrapper">
           <nav class="s_border">
             <div class="sidebar-header s_nav_bar_header">
               <i class="fa fa-user-circle"></i>Abyat Travel & Tours
             </div>
             <ul class="list-unstyled components s_ul_list">
               <li>
                 <a href="{{route('mybooking')}}">
                   <i class="fa fa-address-book"></i>
                   My Bookings
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li>
                 <a href="{{route('dashboard')}}">
                   <i class="fa fa-user"></i>
                   My Account
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li class="active">
                 <a href="{{route('setting')}}">
                   <i class="fa fa-gear"></i>
                   Setting
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
             </ul>
           </nav>
         </div>
         <div class="s_button_logout_form">
          <a href="{{route('logout_user')}}" class="btn s_button_logout">LOGOUT</a>
          <!-- <button type="button" class="btn s_button_logout" name="button">LOGOUT</button> -->
         </div>
       </div>
       <div class="col-md-9 col-xs-12">
         <div class="wrapper">
           <div class="s_border s_margin_20">
             <div class="s_nav_bar_header">
               <i class="fa fa-user"></i>MY Account
             </div>             
              <form class="s_dashboard_form" action="{{route('update_password',['id'=>Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
               <div class="s_tab_body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cur_password">Current Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="cur_password" name="old_password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="newpassword">New Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="newpassword" name="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="retry_password">Retype new Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="retry_password" name="password_confirmation">
                    </div>
                  </div>
                </div>
               </div>
               <div class="s_sub_end_button">
                 <div class="row">
                   <div class="col-md-3 col-xs-4">
                     <span>*Required Fields</span>
                   </div>
                   <div class="col-md-3 col-md-offset-6 col-xs-offset-4 col-xs-4">
                     <button type="submit" class="btn s_sub_button active">Save</button>
                   </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
@endsection
