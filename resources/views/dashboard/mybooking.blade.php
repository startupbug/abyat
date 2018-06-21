@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="booking">
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
               <li class="active">
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
               <li>
                 <a href="{{route('setting')}}">
                   <i class="fa fa-gear"></i>
                   Setting
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <!-- <li>
                 <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                 <ul class="collapse list-unstyled" id="homeSubmenu">
                     <li><a href="#">Page</a></li>
                     <li><a href="#">Page</a></li>
                     <li><a href="#">Page</a></li>
                 </ul>
                </li> -->
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
               <i class="fa fa-address-book"></i>MY BOOKINGS
             </div>
             <div class="s_sub_heading_button">
               <button type="button" class="btn s_sub_button active" name="button">All</button>
               <button type="button" class="btn s_sub_button" name="button">Upcoming</button>
               <button type="button" class="btn s_sub_button" name="button">Completed</button>
             </div>
             <div class="s_tab_body">
               <div class="s_nobooking">
                 <h3>No bookings yet</h3>
                 <button type="button" class="btn s_sub_button active" name="button">Booking Now</button>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
@endsection
