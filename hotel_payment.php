<?php include('header.php'); ?>
<section class="hotel hotel_pay" dir="rtl">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="about_text f_confrm_content">Payment</h3>
            <ul class="list_right">
               <li><a href="#">Search</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="hotels.php">Select Hotels</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="selectroom.php">Select Rooms</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="hotel_payment.php">Payment</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="confirmation.php">Confirmation</a></li>
            </ul>
            <div class="f_hotel_border"></div>
         </div>
      </div>
   </div>
   <div class="container f_hotel_main">
      <div class="row">
         <div class="col-md-8 s_row_mainborder">
            <div class="row">
               <form class="" action="#">
                  <div class="col-md-12">
                     <div class="row header_border_bottom">
                        <div class="col-md-9">
                           <h3>Contact Details</h3>
                        </div>
                        <div class="col-md-3">
                           <p>* REQUIRED FIELDS</p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="s_form_padding">
                              <div class="s_dashboard_form">
                                 <div class="row">
                                    <label class="col-md-3 s_label">Full name*</label>
                                    <div class="col-md-3">
                                       <div class="form-group s_form_field">
                                          <select class="select_f">
                                             <option value="volvo">Select</option>
                                             <option value="saab">Saab</option>
                                             <option value="opel">Opel</option>
                                             <option value="audi">Audi</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <input type="text" class="form-control s_form_field" name="name_on_card">
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <input type="text" class="form-control s_form_field" name="name_on_card">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label class="col-md-3 s_label">Email*</label>
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <input type="email" class="form-control s_form_field" name="email">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label class="col-md-3 s_label">Mobile no.*</label>
                                    <div class="col-md-4">
                                       <div class="form-group s_form_field">
                                          <select class="select_f">
                                             <option value="volvo">Select</option>
                                             <option value="saab">Saab</option>
                                             <option value="opel">Opel</option>
                                             <option value="audi">Audi</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <input type="email" class="form-control s_form_field" name="email">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="row">
               <div class="checkbox_payment">
                  <div class="checkbox">
                     <label><input type="checkbox" value="">I am booking for someone else and i will not be staying at the hotel</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="checkbox_payment">
                  <div class="checkbox">
                     <label><input type="checkbox" value="">Special Requests</label>
                  </div>
               </div>
            </div>
            <!--<div class="row">
               <div class="col-md-12">
                 <div class="row">
                   <div class="col-md-10">
                     <h3>REVIEW YOUR FLIGHT DETAILS</h3>
                   </div>
                   <div class="col-md-2">
                     <div class="dropdown">
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
                 </div>
                 <div class="row">
                   <div class="col-md-12">
                     <p class="s_label_tag">
                       <i class="fa fa-arrow-circle-right"></i>
                       Flight on Thursday 07 June 2018 from Manila to Kinshasa
                     </p>
                   </div>
                 </div>
               </div>
               </div>-->
            <div class="row">
               <form class="" action="#">
                  <div class="col-md-12">
                     <div class="row header_border_bottom">
                        <div class="col-md-9">
                           <h3>Please enter your card details</h3>
                        </div>
                        <div class="col-md-3">
                           <p>* REQUIRED FIELDS</p>
                        </div>
                     </div>
                     <div class="row `right_left`">
                        <div class="col-md-9">
                           <div class="s_form_padding">
                              <div class="s_dashboard_form">
                                 <div class="row">
                                    <label class="col-md-4 s_label">Name on Card*</label>
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <input type="text" class="form-control s_form_field" name="name_on_card">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label class="col-md-4 s_label">Card Number*</label>
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <input type="number" class="form-control s_form_field" name="card_number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label class="col-md-4 s_label">Expiration Date*</label>
                                    <div class="col-md-4">
                                       <div class="form-group s_form_field">
                                          <select class="select_f">
                                             <option value="volvo">Select</option>
                                             <option value="saab">Saab</option>
                                             <option value="opel">Opel</option>
                                             <option value="audi">Audi</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group s_form_field">
                                          <select class="select_f">
                                             <option value="volvo">Select</option>
                                             <option value="saab">Saab</option>
                                             <option value="opel">Opel</option>
                                             <option value="audi">Audi</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <label class="col-md-4 s_label">Security Code*</label>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <input type="number" class="form-control s_form_field" name="card_number">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <img src="assets/images/visa_img.jpg" class="img-responsive f_visa">
                        </div>
                     </div>
                  </div>
            </div>
            <hr>
            <!--<div class="row custom_alert">
               <div class="col-md-12">
                 <p>
                   By completing this booking. I acknowledge and agree to <b>booking and policy</b>, the <b>privacy policy</b> and the
                   <b>terms and conditions</b> that are applicable to this intinenary
                 </p>
               </div>
               </div>-->
            <div class="text-right">
            <button type="button" class="btn btn-default s_button" name="button">
            PAY NOW SAR 6,195.47 <i class="fa fa-angle-right"></i>
            </button>
            </div>
            </form>
         </div>
         <div class="col-md-4">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="s_heading_h3">BOOK SUMMARY</h3>
                        <hr>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <img src="assets/images/hotelconfirm_img.jpg">
                     </div>
                  </div>
                  <h3 class="s_heading_h3">Friendly Venice Suites</h3>
                  <ul class="payment_diplay">
                     <li><i class="fa fa-star"></i></li>
                     <li><i class="fa fa-star"></i></li>
                     <li><i class="fa fa-star"></i></li>
                     <li><i class="fa fa-star"></i></li>
                     <li><i class="fa fa-star"></i></li>
                  </ul>
                  <p class="f_paymentcontent">San Marco, 2947 Campo Santo Stefano, San Marco, 30124 Venice, Italy</p>
                  <div class="left_f_payment">Check-in date</div>
                  <div class="right_f_payment">Thursday, May 17th, 2018</div>
                  <div class="left_f_payment">Check-in date</div>
                  <div class="right_f_payment">Thursday, May 17th, 2018</div>
                  <div class="left_f_payment">Number of nights</div>
                  <div class="right_f_payment">18</div>
                  <div class="left_f_payment">Number of rooms</div>
                  <div class="right_f_payment">1</div>
                  <div class="clearfix"></div>
                  <h3 class="s_heading_h3 f_selected">SELECTED ROOM</h3>
                  <hr>
                  <div class="col-md-6">
                     <p class="f-sup"><i class="fa fa-bed f_icon_bed" aria-hidden="true"></i>Superior Double</p>
                     <p class="f-sup">Non-refundable</p>
                  </div>
                  <div class="col-md-6">
                     <div class="f_main_content">
                        <h3 class="f_fits">Fits 2 Adults</h3>
                     </div>
                  </div>
                  <!--<div class="row">
                     <div class="col-md-10">
                       <h3 class="s_heading_h3">
                         Traveller 1 (Adult)
                       </h3>
                     </div>
                     <div class="col-md-2">
                       <i class="fa fa-angle-up s_heading_h3"></i>
                     </div>
                     <div class="traveller_detail">
                       <div class="col-md-6 padding_top_bottom_5">
                         <p>Fare SAR 2.979.00</p>
                       </div>
                       <div class="col-md-6 padding_top_bottom_5">
                         <p class="text-right">SAR 2,979.00</p>
                       </div>
                       <div class="col-md-6 padding_top_bottom_5">
                         <p>Taxes and Fee</p>
                       </div>
                       <div class="col-md-6 padding_top_bottom_5">
                         <p class="text-right">Taxes and Fees SAR 58.00</p>
                       </div>
                     </div>
                     </div>-->
                  <!--<div class="row">
                     <div class="col-md-10">
                       <h3 class="s_heading_h3">
                         Traveller 2 (Adult)
                       </h3>
                     </div>
                     <div class="col-md-2">
                       <i class="fa fa-angle-down s_heading_h3"></i>
                     </div>
                     </div><hr>-->
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="row padding_top_bottom">
                     <div class="col-md-6">
                        <b>
                        Service Fee
                        </b>
                     </div>
                     <div class="col-md-6">
                        <p class="text-right">SAR 121.47</p>
                     </div>
                  </div>
                  <div class="row padding_top_bottom">
                     <div class="col-md-6">
                        <b>
                        VAT
                        </b>
                     </div>
                     <div class="col-md-6 text-right">
                        <p class="text-right">SAR 0.00</p>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <div class="row">
                     <div class="col-md-6">
                        <b>
                        Total (incl. VAT)
                        </b>
                     </div>
                     <div class="col-md-6 text-right">
                        <b>
                        SAR 6,195.47
                        </b>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel panel-default f_panel_contact">
               <div class="panel-heading f_panel_head">24/7 <span>CUSTOMER SERVICE</span></div>
               <div class="panel-body f_contact_body">
                  <p class="f_detail">For further assistance</p>
                  <div class="f_num"><i class="fa fa-phone f_phone_icon" aria-hidden="true"></i>000 00 0000</div>
                  <br>
                  <p class="f_detail">For International calls:</p>
                  <div class="f_num"><i class="fa fa-phone f_phone_icon" aria-hidden="true"></i>000 00 0000</div>
                  <br>
                  <p class="f_detail">For any general inquiries:</p>
                  <div class="f_num"><i class="fa fa-envelope f_phone_icon" aria-hidden="true"></i>customercare@abyat.com</div>
                  <br>
                  <p class="f_detail">Frequantly asked questions:</p>
                  <a href="#" class="f_more">More Questions</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
