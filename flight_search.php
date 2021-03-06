<?php include('header.php'); ?>
<section class="flight_search" dir="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="about_text f_confrm_content">Select flight</h3>
            <ul class="list_right">
               <li>
                  <a href="flight_search.php">Search</a>
                  <i class="fa fa-angle-right f_iconright"></i>
               </li>
               <li>
                  <a href="#">Select flight</a>
                  <i class="fa fa-angle-right f_iconright"></i>
               </li>
               <li class="li_active">
                  <a href="traveller_details.php">Traveller details</a>
                  <i class="fa fa-angle-right f_iconright"></i>
               </li>
               <li>
                  <a href="traveller_payment.php">Payment</a>
                  <i class="fa fa-angle-right f_iconright"></i>
               </li>
               <li><a href="confirm_flight.php">Confirmation</a></li>
            </ul>
            <div class="f_hotel_border"></div>
         </div>
      </div>
   </div>
   <div class="container f_search_padding">
      <div class="row">
         <div class="col-md-3">
            <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <label>Price</label>
                  <i class="fa fa-angle-up f_angle"></i>
                  <input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                  <div class="left_rangeslider">Min</div>
                  <div class="right_rangeslider">Max</div>
               </div>
            </div>
            <form>
               <div class="f_main_district">
                  <p class="f_star_rating">Stops</p>
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
                  <div class="clearfix"></div>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">2+ Stops</label>
                  </div>
            </form>
            </div>
            <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <label>Departure Time</label>
                  <i class="fa fa-angle-up f_angle"></i>
                  <p class="f_city">From City Name</p>
                  <input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                  <div class="left_rangeslider">Thur 20-40</div>
                  <div class="right_rangeslider">Sat 23-50</div>
               </div>
            </div>
            <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <label>Arrival Time</label>
                  <i class="fa fa-angle-up f_angle"></i>
                  <input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                  <div class="left_rangeslider">Thur 20-40</div>
                  <div class="right_rangeslider">Sat 23-50</div>
               </div>
            </div>
            <form>
               <div class="f_main_district">
                  <p class="f_star_rating">Airports</p>
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
                  <div class="clearfix"></div>
                  <p class="f_city f_kinsha">Depart from kinshasa</p>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">FIH: N'djili Airport</label>
                  </div>
                  <p class="f_city f_kinsha">Arrive In Manila</p>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">MNL: Ninoy Aquino</label>
                  </div>
            </form>
            </div>
            <form>
               <div class="f_main_district">
                  <p class="f_star_rating">Airlines</p>
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
                  <div class="clearfix"></div>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">AF: Air France</label>
                  </div>
            </form>
            </div>
         </div>
         <div class="col-md-9">
            <div class="row f_search_border">
               <div class="col-md-6">
                  <div class="paragraphs">
                     <div class="span4">
                        <img style="float:left" src="assets/images/search_flightimg.jpg" class="img-responsive f_search_img">
                        <div class="content-heading">
                           <h3 class="f_time">FIH 20:40 <img src="assets/images/plane_search.jpg" class="f_plane_img">22:50MNL </h3>
                        </div>
                        <h3 class="f_arrives">Arrives after: 2 days </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="f_air">Air France</p>
                        <p class="f_af">AF-889</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">43h 10m, 2+ stops </h3>
                  <h3 class="f_km1">17h 55m in  CDG</h3>
                  <h3 class="f_km1">02h 55m in  HKG</h3>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">SAR</h3>
                  <h3 class="f_km12">18,524</h3>
                  <a href="#" class="f_select_flight">SELECT FLIGHT</a>
               </div>
            </div>
            <div class="row f_search_border">
               <div class="col-md-6">
                  <div class="paragraphs">
                     <div class="span4">
                        <img style="float:left" src="assets/images/search_flightimg.jpg" class="img-responsive f_search_img">
                        <div class="content-heading">
                           <h3 class="f_time">FIH 20:40 <img src="assets/images/plane_search.jpg" class="f_plane_img">22:50MNL </h3>
                        </div>
                        <h3 class="f_arrives">Arrives after: 2 days </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="f_air">Air France</p>
                        <p class="f_af">AF-889</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">43h 10m, 2+ stops </h3>
                  <h3 class="f_km1">17h 55m in  CDG</h3>
                  <h3 class="f_km1">02h 55m in  HKG</h3>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">SAR</h3>
                  <h3 class="f_km12">18,524</h3>
                  <a href="#" class="f_select_flight">SELECT FLIGHT</a>
               </div>
            </div>
            <div class="row f_search_border">
               <div class="col-md-6">
                  <div class="paragraphs">
                     <div class="span4">
                        <img style="float:left" src="assets/images/search_flightimg.jpg" class="img-responsive f_search_img">
                        <div class="content-heading">
                           <h3 class="f_time">FIH 20:40 <img src="assets/images/plane_search.jpg" class="f_plane_img">22:50MNL </h3>
                        </div>
                        <h3 class="f_arrives">Arrives after: 2 days </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="f_air">Air France</p>
                        <p class="f_af">AF-889</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">43h 10m, 2+ stops </h3>
                  <h3 class="f_km1">17h 55m in  CDG</h3>
                  <h3 class="f_km1">02h 55m in  HKG</h3>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">SAR</h3>
                  <h3 class="f_km12">18,524</h3>
                  <a href="#" class="f_select_flight">SELECT FLIGHT</a>
               </div>
            </div>
            <div class="row f_search_border">
               <div class="col-md-6">
                  <div class="paragraphs">
                     <div class="span4">
                        <img style="float:left" src="assets/images/search_flightimg.jpg" class="img-responsive f_search_img">
                        <div class="content-heading">
                           <h3 class="f_time">FIH 20:40 <img src="assets/images/plane_search.jpg" class="f_plane_img">22:50MNL </h3>
                        </div>
                        <h3 class="f_arrives">Arrives after: 2 days </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="f_air">Air France</p>
                        <p class="f_af">AF-889</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">43h 10m, 2+ stops </h3>
                  <h3 class="f_km1">17h 55m in  CDG</h3>
                  <h3 class="f_km1">02h 55m in  HKG</h3>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">SAR</h3>
                  <h3 class="f_km12">18,524</h3>
                  <a href="#" class="f_select_flight">SELECT FLIGHT</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
