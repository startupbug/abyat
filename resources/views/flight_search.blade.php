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
                  <a href="#">Select flightz</a>
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

   <div class="container f_search_padding" >
      <div class="row">

         <form action="{{route('flight_search')}}" method="get">
            <input type="hidden" name="limit" value="10">
            <input type="hidden" name="offset" value="1">
            <input type="hidden" name="sortby" value="totalfare">
            <input type="hidden" name="order" value="asc">
            <input type="hidden" name="enabletagging" value="true">

         <div class="col-md-3">
            <div class="f_main_district f_padding_bottom s_padding_15">
               <p class="f_star_rating">
                  Arrival Airport
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-input-text top-right-radius s_select">
                        <select class="select-search form-control" name="origin" id="origin">
   

                           @foreach($json as $value)
                               @if($value['code'] == $request_params['origin']) 
                                 <option value="{{$value['code']}}" selected>{{$value['name']}}</option>
                               @endif                         
                           <option value="{{$value['code']}}" >{{$value['name']}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <!--<input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                  <div class="left_rangeslider">Min</div>
                  <div class="right_rangeslider">Max</div>-->
               </div>
            </div>
            <div class="f_main_district f_padding_bottom s_padding_15">
               <p class="f_star_rating">
                  Departure Airport
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-input-text top-right-radius s_select">
                        <select class="select-search form-control" name="destination">
                            @foreach($json as $value)
                               @if($value['code'] == $request_params['destination'] ) 
                                    <option value="{{$value['code']}}" selected>{{$value['name']}}</option>
                               @endif
                                 <option value="{{$value['code']}}">{{$value['name']}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <!--<div class="checkbox f_check_box">
                  <label><input type="checkbox" value="">2+ Stops</label>
               </div>-->
            </div>
            <div class="navbar-form f_navform form_border s_padding_15">
               <div class="input-group f_label_search sf_label_search" style="width: 100%;">
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
            <div class="f_main_district f_padding_bottom s_padding_15">
               <p class="f_star_rating">
                  Minimum Fare
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-input-text top-right-radius s_select">
                        <input type="text" class="form-control" name="minfare"
                           value=" @if(isset($request_params['minfare'])) request_params['minfare']@endif"
                         placeholder="Minimum Fare">
                     </div>
                  </div>
               </div>
            </div>
            <div class="f_main_district f_padding_bottom s_padding_15">
               <p class="f_star_rating">
                  Maximum Fare
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-input-text top-right-radius s_select">
                        <input type="text" class="form-control" name="maxfare"
                         value=" @if(isset($request_params['maxfare'])) request_params['maxfare']@endif"
                         placeholder="Maximum Fare">
                     </div>
                  </div>
               </div>
            </div>
            <div class="f_main_district f_padding_bottom s_padding_15">
               <p class="f_star_rating">
                  Passenger Count
                  <i class="fa fa-angle-up f_angle f_left_icon"></i>
               </p>
               <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="custom-input-text bottom-radius s_select">
                        <select class="form-control" name="passengercount"> 
                         @for($i=1; $i<=5; $i++)
                           <option value="{{$i}}" 
                           @if(isset($request_params['passengercount']) && $i==$request_params['passengercount']) selected @endif>{{$i}} Passenger</option>
                         @endfor
                        </select>
                     </div>
                  </div>
               </div>
               <br>
                   <button type="submit" class="button_search">
                                    <i class="fa fa-search"></i>
                                    <span>
                                    Search flights
                                    </span>
                                    </button>
                  <!--<div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">AF: Air France</label>
                  </div>-->
               </div>
            </div>
         </form>
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

