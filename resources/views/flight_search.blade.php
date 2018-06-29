@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="flight_search flight_search_search">
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
            <div class="f_main_district f_padding_bottom">
               <p class="f_star_rating">
                  Departure Airport
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="col-md-12">
                  <div class="custom-input-text top-right-radius s_select">
                     <input type="text" class="form-control" id="usr" name="origin">
                  </div>
               </div>
               <!--<input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
               <div class="left_rangeslider">Min</div>
               <div class="right_rangeslider">Max</div>-->
            </div>
            <div class="f_main_district f_padding_bottom">
               <p class="f_star_rating">
                  Arrival Airport
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="col-md-12">
                  <div class="custom-input-text top-right-radius s_select">
                     <input type="text" class="form-control" id="usr" name="origin">
                  </div>
               </div>
               <!--<div class="checkbox f_check_box">
                  <label><input type="checkbox" value="">2+ Stops</label>
               </div>-->
            </div>
            <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <label>Departure Arrival Date</label>
                  <i class="fa fa-angle-up f_angle"></i>
                  
                  <div class="col-md-12 f-custom-input">
                     <input type="text" class="daterange oneway_daterange " name="departure_arrival_date" format="Y-m-d"/>
                     <div class="custom-input-text s_calendar right-radius start_date">
                        <i class="fa fa-calendar-o"></i>
                        <span class="month">March</span>
                        <span class="date">12</span>
                        <span class="day">Tuesday</span>
                     </div>
                     <div class="custom-input-text s_calendar left-radius end_date">
                        <i class="fa fa-calendar-o"></i>
                        <span class="month">March</span>
                        <span class="date">12</span>
                        <span class="day">Tuesday</span>
                     </div>
                  </div>

               </div>
            </div>
            <div class="f_main_district f_padding_bottom">
               <p class="f_star_rating">
                  Minimum Fare
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="col-md-12">
                  <div class="custom-input-text top-right-radius s_select">
                     <input type="text" class="form-control" name="minfare" placeholder="Minimum Fare">
                  </div>
               </div>
            </div>
            <div class="f_main_district f_padding_bottom">
               <p class="f_star_rating">
                  Maximum Fare
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="col-md-12">
                  <div class="custom-input-text top-right-radius s_select">
                     <input type="text" class="form-control" name="maxfare" placeholder="Maximum Fare">
                  </div>
               </div>
            </div>
            <div class="f_main_district f_padding_bottom">
               <p class="f_star_rating">
                  Passenger Count
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="col-md-12">
                  <div class="custom-input-text bottom-radius s_select">
                     <select class="form-control" name="passengercount">
                        <option value="1">1 Passenger</option>
                        <option value="2">2 Passengers</option>
                        <option value="3">3 Passengers</option>
                        <option value="4">4 Passengers</option>
                        <option value="5">5 Passengers</option>
                     </select>
                  </div>
               </div>
               <!--<div class="checkbox f_check_box">
                  <label><input type="checkbox" value="">AF: Air France</label>
               </div>-->
            </div>
         </div>
         <div class="col-md-9">
            @foreach($data as $key => $value)
            <div class="row f_search_border">
               <div class="col-md-6">
                  <div class="paragraphs">
                     <div class="span4">
                        <img style="float:left" src="{{asset('public/assets/images/search_flightimg.jpg')}}" class="img-responsive f_search_img">
                        <div class="content-heading">
                           <h3 class="f_time">Departure Time                               
                              {!! date('H:i a', strtotime( $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureDateTime)) !!}
                              <img src="{{asset('public/assets/images/plane_search.jpg')}}" class="f_plane_img">Arrival Time 
                              {!! date('H:i a', strtotime( $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalDateTime)) !!} 
                           </h3>
                        </div>
                        <h3 class="f_arrives">Departure Date 
                           {!! date('d-M-Y', strtotime( $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureDateTime)) !!}
                        </h3>
                        <h3 class="f_arrives">Arrival Date 
                           {!! date('d-M-Y', strtotime( $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalDateTime)) !!}
                        </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="f_air">Seats Remaining {!! $value->AirItineraryPricingInfo->FareInfos->FareInfo[0]->TPA_Extensions->SeatsRemaining->Number !!} 
                        </p>
                        <p class="f_af">{!! $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->Code !!} - {!! $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->FlightNumber !!}</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">43h 10m, 2+ stops </h3>
                  <h3 class="f_km1">Departure Airport {!! $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode!!}</h3>
                  <h3 class="f_km1">Arrival Airport {!! $value->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalAirport->LocationCode!!}</h3>
               </div>
               <div class="col-md-3">
                  <h3 class="f_km">{!! $value->AirItineraryPricingInfo->ItinTotalFare->TotalFare->CurrencyCode!!}</h3>
                  <h3 class="f_km12">{!! $value->AirItineraryPricingInfo->ItinTotalFare->TotalFare->Amount!!}</h3>                  
                  <a href="{{route('flight_detail',['tagID' => $value->TPA_Extensions->TagID ])}}" class="f_select_flight">SELECT FLIGHT</a>
               </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-12">
               <form >
               <div class="row">
                  <a href="{{$prev}}">Prev</a>
                  <a href="{{$next}}">Next</a>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection