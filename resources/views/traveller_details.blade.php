@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="hotel">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="about_text f_confrm_content">Traveller details</h3>

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
         </div>
      </div>
   </div>
   <div class="container f_hotel_main">
      <div class="row">
        <div class="col-md-8 s_row_mainborder">
          <div class="row">
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
                     Flight on {!! date('D d-M-Y', strtotime( $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureDateTime)) !!} from  {!! $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode!!} to {!! $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalAirport->LocationCode!!}
                   </p>
                 </div>
               </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-10">
                   <h3>Sign in now and speed up your booking!</h3>
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
                     <i class="fa fa-arrow-circle-right"></i> Autofill your details
                     <i class="fa fa-angle-right f_iconright"></i> Save new travellers
                     <i class="fa fa-angle-right f_iconright"></i> Manage your bookings
                   </p>
                   <div class="s_form_padding">
                      <form method="post" class="s_dashboard_form" action="{{route('login_post')}}">
                              {{csrf_field()}}
                      <div class="row">
                       <div class="col-md-5">
                         <div class="form-group">
                           <label for="email">Please enter your email <span>*</span> </label>
                           <input type="text" class="form-control s_form_field" id="email" placeholder="(required)" name="email">
                         </div>
                       </div>
                       <div class="col-md-5">
                         <div class="form-group">
                           <label for="password">Please enter your password <span>*</span> </label>
                           <input type="password" class="form-control s_form_field" id="password" placeholder="(required)" name="password">
                         </div>
                       </div>
                       <input type="hidden" name="flight_details" value="1">
                       <div class="col-md-2">
                         <button type="submit" class="btn s_sub_button active s_form_margin_top">SIGN IN</button>
                       </div>
                      </div>
                    </form>
                   </div>
                 </div>
               </div>
               <div class="row s_sub_end_button">
                 <div class="row">
                   <div class="col-md-12">
                     <p class="s_botton_heading text-danger">Don't have an account with us?</p>
                     <p class="s_botton_subheading">Once you complete your booking, we will automatically create an account for you. You will receive an activation email with a link.</p>
                   </div>
                 </div>
               </div>
             </div>
          </div>
          <div class="row alert_danger">
            <div class="alert alert-danger">
              <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
            </div>
          </div>
         <form action="{{route('submit_passenger_info',['id' => Auth::user()->id])}}" class="s_row_mainborder" method="post"> {{csrf_field()}}
          <input type="hidden" name="tag_id" value="{{$data->TPA_Extensions->TagID}}">
            <p class="add_adult">+ Add Adult</p>
            <div id="adult_panel">  

              <div class="row adult_div_remove">
                <div class="col-md-12">
                  <div class="row header_border_bottom">
                    <div class="col-md-8 col-xs-4">
                       <h3>Adult 1</h3>
                    </div>
                    <div class="col-md-4 col-xs-8">
                      <p class="text_required">* REQUIRED FIELDS
                        <i class="fa fa-close div_remove"></i>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="s_form_padding">
                        <div class="s_dashboard_form">
                         <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="width_50">Full Name *</label>
                              <select class="form-control s_form_field width_50" name="title[]" required>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mr.s</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control s_form_field" placeholder="First" name="firstname[]" required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control s_form_field" placeholder="Mid" name="middlename[]" required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <input type="text" class="form-control s_form_field" placeholder="Last" name="lastname[]" required>
                            </div>
                          </div>
                         </div>
                        <div class="row">               
                          <div class="col-md-8">
                            <div class="form-group">
                              <select class="form-control s_form_field" name="passport_option[]" required>
                                <option disabled="">Select</option>
                                <option value="Passport">Passport</option>
                                <option value="Saudi Muqeem ID">Saudi Muqeem ID</option>
                                <option value="Saudi Citizen ID">Saudi Citizen ID</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <input type="text" class="form-control s_form_field" placeholder="Frequest flyer number" name="frequest_number[]" required>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="s_sub_end_button_bg">
                      <div class="col-md-12">
                        <p class="s_botton_subheading">We share the frequent flyer details with airline, though we can't guarantee point awards.</p>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row s_sub_end_button">
                    <div class="col-md-12">
                      <p>Frequent flyer, meal, seats and special assistance (optional)
                        <i class="fa fa-angle-down"></i>
                      </p>
                    </div>
                  </div> -->
                </div>
              </div>
              
            </div>
            <div class="row">
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
                      <div class="s_dashboard_form without_padding">
                       <div class="row">
                        <div class="col-md-2 detail">
                          <div class="form-group">
                            <label>Full Name *</label>
                          </div>
                        </div>
                        <div class="col-md-2 detail">
                          <div class="form-group">
                            <select class="form-control s_form_field" name="contact_person_title" required>
                              <option value="Mr">Mr.</option>
                              <option value="Mrs">Mrs.</option>
                         
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control s_form_field" placeholder="First" name="first">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control s_form_field" placeholder="Last" name="middle">
                          </div>
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-2 pt15">
                          <label class="width_50">Email *</label>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control s_form_field" placeholder="Email" name="email">
                          </div>
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-2 pt15">
                          <label class="width_50">Mobile no *</label>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="mobile">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="text" class="form-control s_form_field" placeholder="Frequent flyer number" name="contact_person_flyer_number" value="">
                          </div>
                        </div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn s_sub_button active s_form_margin_top " type="submit"> Submit </button>
          </form>  
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="s_heading_h3">FARE DETAILS</h3><hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="s_heading_h3">
                    Traveller 1 (Adult)
                    <span class="pull-right">
                      <i class="fa fa-angle-down s_heading_h3 fa_angle_toggle hidden"></i>
                      <i class="fa fa-angle-up s_heading_h3 fa_angle_toggle"></i>
                    </span>
                  </h3>
                </div>

                <div class="traveller_detail">
                  <div class="col-md-6 padding_top_bottom_5">
                    <p>Fare {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->Amount!!}</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p class="text-right">{!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->Amount!!}</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p>Taxes and Fee</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p class="text-right">Taxes and Fees {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->Taxes->Tax[0]->Amount!!}</p>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="s_heading_h3">
                    Traveller 2 (Adult)
                    <span class="pull-right">
                      <i class="fa fa-angle-down s_heading_h3 fa_angle_toggle "></i>
                      <i class="fa fa-angle-up s_heading_h3 fa_angle_toggle hidden"></i>
                    </span>
                  </h3>
                </div>
                <div class="traveller_detail hidden">
                  <div class="col-md-6 padding_top_bottom_5">
                    <p>Fare {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->Amount!!}</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p class="text-right">{!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->Amount!!}</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p>Taxes and Fee</p>
                  </div>
                  <div class="col-md-6 padding_top_bottom_5">
                    <p class="text-right">Taxes and Fees {!! $data->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!} {!! $data->AirItineraryPricingInfo->ItinTotalFare->Taxes->Tax[0]->Amount!!}</p>
                  </div>
                </div>
              </div><hr>

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
  </div>
</section>

         </div>
         <!--<div class="col-md-4">
           <div class="row">
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-12">
                   <h3 class="s_heading_h3">FARE DETAILS</h3><hr>
                 </div>
               </div>
               <div class="row">
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
               </div><hr>

               <div class="row">
                 <div class="col-md-10">
                   <h3 class="s_heading_h3">
                     Traveller 2 (Adult)
                   </h3>
                 </div>
                 <div class="col-md-2">
                   <i class="fa fa-angle-down s_heading_h3"></i>
                 </div>
               </div><hr>

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
         </div>-->
@endsection