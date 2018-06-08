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
               <li class="active">
                 <a href="<?php echo $base_url;?>dashboard/myaccount.php">
                   <i class="fa fa-user"></i>
                   My Account
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li>
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
             <div class="s_sub_heading_button">
               <button type="button" class="btn s_sub_button active" name="button">Account Details</button>
             </div>
             <form class="s_dashboard_form" action="#">
               <div class="s_tab_body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="username">Username <span>*</span> </label>
                      <input type="text" class="form-control s_form_field" id="username" placeholder="Enter User Name" name="username">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="fullname">Full Name <span>*</span> </label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control s_form_field" id="fullname" name="">
                        <option value="title">Title</option>
                        <option value="title">Title 1</option>
                        <option value="title">Title 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="First" name="first">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="Middle" name="middle">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="Last" name="lastname">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="phone">Phone <span>*</span> </label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control s_form_field" id="phone">
                        <option value="title">+971</option>
                        <option value="title">+921</option>
                        <option value="title">+333</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="phone" class="form-control s_form_field">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email <span>*</span> </label>
                      <input type="email" class="form-control s_form_field" id="email" placeholder="(required)" name="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="address">Address <span>*</span> </label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" id="address" placeholder="(required)" name="address1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="(required)" name="address2">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country <span>*</span> </label>
                      <select class="form-control s_form_field" id="country">
                        <option selected>Select a Country</option>
                        <option value="usa">USA</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">City <span>*</span> </label>
                      <select class="form-control s_form_field" id="country">
                        <option selected>Select a City</option>
                        <option value="newyork">New York</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="zipcode">Zip Code <span>*</span></label>
                      <input type="number" id="zipcode" class="form-control s_form_field" name="zipcode">
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
