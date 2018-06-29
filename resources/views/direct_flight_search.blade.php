@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="triprite">
   <div class="container-fluid s_silder_tab_center">
     <section class="search-box-wrapper">
                  <div class="container">
                     <div class="flights-search-box">
                        <div class="row">
                           <div class="col-md-8">
                              <label class="custom_radio">
                              <input type="radio" class="flight_radio_button radio_button" name="r1" data-message="one-way" checked="" value="one-way">
                              <span class="radio_span_text">
                              One-way
                              </span>
                              </label>
                              <label class="custom_radio">
                              <input type="radio" class="flight_radio_button radio_button" name="r1" data-message="round-trip" value="round-trip">
                              <span class="radio_span_text">
                              Round-trip
                              </span>
                              </label>
                              <label class="custom_radio">
                              <input type="radio" class="flight_radio_button radio_button" name="r1" data-message="multi-city" value="multi-city">
                              <span class="radio_span_text">
                              Multi-city
                              </span>
                              </label>
                           </div>
                        </div>
                        <div id="one-way" class="search_flight">
                         <form action="{{route('flight_search')}}" method="get">
                              <input type="hidden" name="limit" value="10">
                              <input type="hidden" name="offset" value="1">
                              <input type="hidden" name="sortby" value="totalfare">
                              <input type="hidden" name="order" value="asc">
                              <input type="hidden" name="enabletagging" value="true">
                              
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin" name="origin">
                                             <label class="custom_container">ETickets
                                             <input type="checkbox" checked="checked" name="eticketsonly" value="y">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" name="destination" class="flight-search-form-input" placeholder="Origin">
                                            <!--  <label class="custom_container">Arrival&nbsp;&nbsp; Airport
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="row">
                                       <div class="col-md-12">
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
                                 <div class="col-md-3">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="row padding_00">
                                             <div class="col-md-6">
                                                <div class="custom-input-text top-right-radius s_select">
                                                   <input type="text" class="form-control" name="minfare" placeholder="Minimum Fare">
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="custom-input-text top-left-radius s_select">
                                                    <input type="text" class="form-control" name="maxfare" placeholder="Maximum Fare">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
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
                                     <!--   <div class="col-md-12">
                                          <select class="form-control" name="eticketsonly">
                                             <option value="y">Yes</option>
                                             <option value="n">No</option>
                                          </select>
                                       </div> -->
                                    </div>
                                 </div>
                                
                                 <div class="col-md-2 button_search_col">
                                    <button type="submit" class="button_search">
                                    <i class="fa fa-search"></i>
                                    <span>
                                    Search flights
                                    </span>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div id="round-trip" class="search_flight hidden">
                           <form>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">ETickets
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">ETickets
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <input type="text" class="daterange roundtrip_daterange " name="daterange" />
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
                                 <div class="col-md-3">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius s_select">
                                             <select class="form-control">
                                                <option>Economy</option>
                                                <option>Premium Economy</option>
                                                <option>Business</option>
                                                <option>First</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius s_select">
                                             <select class="form-control">
                                                <option>1 Passenger</option>
                                                <option>2 Passengers</option>
                                                <option>3 Passengers</option>
                                                <option>4 Passengers</option>
                                                <option>5 Passengers</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-2 button_search_col">
                                    <button type="submit" class="button_search">
                                    <i class="fa fa-search"></i>
                                    <span>
                                    Search flights
                                    </span>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div id="multi-city" class="search_flight hidden">
                           <form>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                             <label class="custom_container">ETickets
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                             <label class="custom_container">ETickets
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-1">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <input type="text" class="daterange multicity_daterange " name="daterange" />
                                          <div class="custom-input-text s_calendar square-radius start_date">
                                             <i class="fa fa-calendar-o"></i>
                                             <span class="month">March</span>
                                             <span class="date">12</span>
                                             <span class="day">Tuesday</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius s_select">
                                             <select class="form-control">
                                                <option>Economy</option>
                                                <option>Premium Economy</option>
                                                <option>Business</option>
                                                <option>First</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius s_select">
                                             <select class="form-control">
                                                <option>1 Passenger</option>
                                                <option>2 Passengers</option>
                                                <option>3 Passengers</option>
                                                <option>4 Passengers</option>
                                                <option>5 Passengers</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-2 button_search_col">
                                    <button type="submit" class="button_search">
                                    <i class="fa fa-search"></i>
                                    <span>
                                    Search flights
                                    </span>
                                    </button>
                                 </div>
                              </div>
                              <div class="row multi-city-value multi-city-value_center" id="multi-city-flight">
                                 <div class="col-md-8 flights_multi">
                                    <h3 class="www-srchf__multi__ttl">
                                       <i class="fa fa-plane"></i> Flight 2
                                    </h3>
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="custom-input-text top-radius">
                                                   <i class="fa fa-map-marker"></i>
                                                   <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                                   <label class="custom_container">ETickets
                                                   <input type="checkbox" checked="checked">
                                                   <span class="custom_checkmark"></span>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="custom-input-text bottom-radius">
                                                   <i class="fa fa-map-marker"></i>
                                                   <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                                   <label class="custom_container">ETickets
                                                   <input type="checkbox" checked="checked">
                                                   <span class="custom_checkmark"></span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <input type="text" class="daterange multicity_daterange_2 " name="daterange" />
                                                <div class="custom-input-text s_calendar square-radius square-radius-m start_date">
                                                   <i class="fa fa-calendar-o"></i>
                                                   <span class="month">March</span>
                                                   <span class="date">12</span>
                                                   <span class="day">Tuesday</span>
                                                </div>
                                             </div>
                                             <span class="close-icon">
                                             <i class="fa fa-times-circle close"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-8 flights_multi">
                                    <div class="add_flights">
                                       <p>
                                          <span class="add-multi-city-flight">
                                          Add up to 6 flights
                                          <i class="fa fa-plus-circle"></i>
                                          </span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </section>
   </div>
</section>
<div class="clearfix"></div>
@endsection
