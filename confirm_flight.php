<?php include('header.php'); ?>
<section class="confirmation" dir="rtl">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="about_text f_confrm_content">Confirmation</h3>
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
                 <a href="traveller_payment.php">Traveller details</a>
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
   <div class="container f_confrm_padding_top">
      <div class="row">
         <div class="col-md-12">
            <h3 class="f_thanku">Thank You! Here's your booking details</h3>
         </div>
      </div>
   </div>
   <div class="container f_confrm_padding">
      <div class="row">
         <div class="col-md-3">
            <div class="main_flight_img"><img src="assets/images/confirmation_img.jpg" class="img_flight"></div>
            <h3 class="f_france">Air France</h3>
             <h3 class="f_france">AF-889</h3>


            <div class="f_check_email"><a href="#" class="check_btn_s f_check">CHECK YOUR EMAIL</a></div>
         </div>
         <div class="col-md-9">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="f_review">REVIEW YOUR FLIGHT DETAILS</h3>
                  <div class="dropdown f_confirm_dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                     View
                     <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                     </ul>
                  </div>
               </div>
               <div class="panel-body color_bg_f">


                 <p class="f_flight">Flight on Thursday 07 June 2018 from Manila to Kinshasa</p>

               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h3 class="f_review">FARE DETAILS</h3>
               </div>
            </div>
            <hr class="f_b_line">
                 <div class="row">
               <div class="col-md-6">
               <p class="f-sup f_travel">Traveller 1 (Adult)</p>

            </div>
            <div class="col-md-6">
               <div class="f_main_content">
                 <p class="f-sup"><i class="fa fa-angle-up f_angleup"></i></p>
               </div>
            </div>
         </div>


            <div class="col-md-6">
               <p class="f-sup">Fare SAR 2,979.00</p>

            </div>
            <div class="col-md-6">
               <div class="f_main_content">
                 <p class="f-sup">SAR 2,979.00</p>
               </div>
            </div>

            <div class="col-md-6">
               <p class="f-sup">Taxes and Fee</p>

            </div>
            <div class="col-md-6">
               <div class="f_main_content">
                 <p class="f-sup">Taxes and Fees SAR 58.00</p>
               </div>
            </div>

            <div class="clearfix">
            </div>
            <hr class="f_b_line">
            <div class="row">
             <div class="col-md-6">
               <p class="f-sup f_travel">Traveller 2 (Adult)</p>

            </div>
            <div class="col-md-6">
               <div class="f_main_content">
                 <p class="f-sup"><i class="fa fa-angle-up f_angleup"></i></p>
               </div>
            </div>
         </div>
            <div class="panel panel-default f_panel_last">
               <div class="panel-body f_panel_bg_color">
                  <div class="col-md-6">
                     <p class="f_num_sar1">Service fee</p>
                  </div>
                  <div class="col-md-6">
                     <div class="f_main_content">
                        <h3 class="f_num_sar">SAR 121,47</h3>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <p class="f_num_sar1">VAT</p>
                  </div>
                  <div class="col-md-6">
                     <div class="f_main_content">
                        <h3 class="f_num_sar">SAR 0.00</h3>
                     </div>
                  </div>
                  <!--<div class="col-md-6">
                     <div class="f_main_content">
                        <p class="f-sup">VAT</p>

                     </div>
                     </div>-->
               </div>
               <div class="panel-footer f_footer_panel">
                  <div class="row">
                     <div class="col-md-6">
                        <p class="f_num_sar1">Total (incl.VAT)</p>
                     </div>
                     <div class="col-md-6">
                        <div class="f_main_content">
                           <h3 class="f_num_sar"><strong>SAR 6,195.47</strong></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
