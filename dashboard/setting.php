<?php include('../header.php'); ?>
<section class="account">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h3 class="s_user_name">Hi, John Doe</h3>
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
                 <a href="<?php echo $base_url;?>dashboard/mybooking.php">
                   <i class="fa fa-address-book"></i>
                   My Bookings
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li>
                 <a href="<?php echo $base_url;?>dashboard/myaccount.php">
                   <i class="fa fa-user"></i>
                   My Account
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li class="active">
                 <a href="<?php echo $base_url;?>dashboard/setting.php">
                   <i class="fa fa-gear"></i>
                   Setting
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
             </ul>
           </nav>
         </div>
         <div class="s_button_logout_form">
           <button type="button" class="btn s_button_logout" name="button">LOGOUT</button>
         </div>
       </div>
       <div class="col-md-9 col-xs-12">
         <div class="wrapper">
           <div class="s_border s_margin_20">
             <div class="s_nav_bar_header">
               <i class="fa fa-user"></i>MY Account
             </div>
             <form class="s_dashboard_form" action="#">
               <div class="s_tab_body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cur_password">Current Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="cur_password" name="cur_password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="newpassword">New Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="newpassword" name="newpassword">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="retry_password">Retype new Password <span>*</span> </label>
                      <input type="password" class="form-control s_form_field" id="retry_password" name="retry_password">
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
<?php include('../footer.php'); ?>
