<?php include('header.php'); ?>
<section class="forgot_password" dir="">
   <!--<div class="container-fluid f_padding">
      <div class="row">
         <div class="col-md-12">
            <img src="assets/images/banner.jpg" class="img-responsive">
         </div>
      </div>
   </div>-->
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="sign_up_div" dir="ltr">
               <div class="panel with-nav-tabs panel-primary f_primary">
                  <div class="panel-heading f_forgot">
                     <ul class="nav nav-tabs sign_nav f_abc">
                        <li class="active"><a href="#tab1primary" data-toggle="tab" class="tab_forgot">Sign in</a></li>
                        <li><a href="#tab2primary" data-toggle="tab" class="tab_forgot">Sign up</a></li>
                     </ul>
                  </div>
                  <div class="panel-body f_panel_body">
                     <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                           <form>
                              <a class="btn btn-block btn-social btn-facebook email_forgot">
                                <i class="fa fa-facebook"></i>
                                <p>Sign In with facebook</p>
                              </a>
                              <a class="btn btn-block btn-social btn-twitter email_forgot">
                                <i class="fa fa-twitter f_twitter"></i>
                                <p>Sign in with Twitter</p>
                              </a>
                              <h1 class="line-title">or</h1>
                              <div class="form-group email_forgot">
                                 <label for="username">Username</label>
                                 <input type="uname" class="form-control f_control_forgot" id="uname" placeholder="(required)">
                              </div>
                              <div class="form-group email_forgot">
                                 <label for="pwd">Password:</label>
                                 <input type="password" class="form-control f_control_forgot" id="pwd_1">
                              </div>
                              <div class="checkbox email_forgot">
                                 <label><input type="checkbox"> Remember me</label>
                              </div>
                              <div class="btn_send"><button type="button" class="btn f_login">LOG IN NOW</button></div>
                              <!--<div class="f_goback"><a href="#" class="go_back">Forgot my password</a></div>-->
                              <div class="btn_forgot"><button type="button" class="btn f_login forgot_pass_btn">FORGOT PASSWORD</button></div>
                              <h1 class="line-title">or</h1>
                              <div class="btn_signup_f">
                                 <button type="button" class="btn f_signup">SIGN UP NOW <br><span>Don't have an account? Join Now</span></button>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                           <form>
                              <a class="btn btn-block btn-social btn-facebook email_forgot">
                                <i class="fa fa-facebook"></i>
                                <p>Sign In with facebook</p>
                              </a>
                              <a class="btn btn-block btn-social btn-twitter email_forgot">
                                <i class="fa fa-twitter f_twitter"></i>
                                <p>Sign in with Twitter</p>
                              </a>
                              <h1 class="line-title">or</h1>
                              <div class="form-group email_forgot">
                                 <label for="fullname">Full Name</label>
                                 <input type="fullname" class="form-control f_control_forgot" id="fullname" placeholder="(required)">
                              </div>
                              <div class="form-group email_forgot">
                                 <label for="username">Email</label>
                                 <input type="email" class="form-control f_control_forgot" id="email_1" placeholder="(required)">
                              </div>
                              <div class="form-group email_forgot">
                                 <label for="pwd">Password (required)</label>
                                 <input type="password" class="form-control f_control_forgot" id="pwd_2" placeholder="(required)">
                              </div>
                              <div class="form-group email_forgot">
                                 <label for="pwd">Confirm Password (required)</label>
                                 <input type="c_password" class="form-control f_control_forgot" id="c_pwd" placeholder="(required)">
                              </div>
                              <div class="btn_send"><button type="button" class="btn f_login">CREATE AN ACCOUNT</button></div>
                              <h1 class="line-title">or</h1>
                              <div class="btn_signup_f">
                                 <button type="button" class="btn f_signup"><a href="login.php">LOGIN NOW </a><br><span>Already have an account? Login Now</span></button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="forgot_password_div hidden">
               <div class="panel with-nav-tabs panel-primary f_primary">
                  <div class="panel-heading f_forgot">
                     <ul class="nav nav-tabs sign_nav sign_nav_s">
                        <li class="active"><a href="#tab1primary" data-toggle="tab" class="tab_forgot">FORGOT PASSWORD</a></li>
                     </ul>
                  </div>
                  <div class="panel-body f_panel_body">
                     <div class="tab-content">
                        <div class="tab-pane fade in active">
                           <p class="panel_content">Please enter the email address you signed up<br>with and we'll send you a password reset link.</p>
                           <form>
                              <div class="form-group email_forgot">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control f_control_forgot" id="email_2">

                              </div>
                                 <div class="btn_send">
                                 <button type="button" class="btn f_sendrequest">RESET PASSWORD</button>
                              </div>

                              <div class="f_goback">
                                 <div class="go_back">Go Back</div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="panel panel-default f_panel_contact f_need_signup">
               <div class="panel-heading f_content_forgot">NEED TO KNOW MORE?</div>
               <div class="panel-body f_contact_body">
                  <ul class="main_listforgot">
                     <li><a href="#">Booking related queries</a></li>
                     <li><a href="#">Check-in</a></li>
                     <li><a href="#">Name change</a></li>
                     <li><a href="#">Changes and amendments</a></li>
                     <li><a href="#">Schedule changes</a></li>
                     <li><a href="#">Refund & Payments</a></li>
                     <li><a href="#">Other service requests</a></li>
                  </ul>
               </div>
            </div>
            <!--<div id="myCarousel" class="carousel slide f_carousal" data-ride="carousel">
               <!-- Indicators -->
            <!--<ol class="carousel-indicators f_indicator">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
            <!--<div class="carousel-inner">
               <div class="item active">
                  <img src="assets/images/img_forfotpass.jpg" alt="Los Angeles" style="width:100%;">
               </div>
               <div class="item">
                  <img src="assets/images/img_forfotpass.jpg" alt="Chicago" style="width:100%;">
               </div>
               <div class="item">
                  <img src="assets/images/img_forfotpass.jpg" alt="New york" style="width:100%;">
               </div>
               </div>
               <!-- Left and right controls -->
            <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <i class="fa fa-chevron-left"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <i class="fa fa-chevron-right"></i>
               <span class="sr-only">Next</span>
               </a>
               </div>-->
         </div>
         <!--<div class="panel panel-default f_panel_contact">
            <div class="panel-heading f_content_forgot">NEED TO KNOW MORE?</div>
            <div class="panel-body f_contact_body">
               <ul class="main_listforgot">
                  <li><a href="#">Booking related queries</a></li>
                  <li><a href="#">Check-in</a></li>
                  <li><a href="#">Name change</a></li>
                  <li><a href="#">Changes and amendments</a></li>
                  <li><a href="#">Schedule changes</a></li>
                  <li><a href="#">Refund & Payments</a></li>
                  <li><a href="#">Other service requests</a></li>
               </ul>
            </div>
            </div>-->
      </div>
   </div>
   </div>
</section>
<?php include('footer.php'); ?>
