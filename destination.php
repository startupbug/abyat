<?php include('header.php'); ?>
<section class="destination">
   <section class="triprite">
   <!-- Silder Images -->
   <div class="container-fluid f_padding">
      <div class="w3-content w3-display-container">
         <img class="mySlides" src="assets/images/banner.jpg" class="img-responsive" style="width:100%">
         <img class="mySlides" src="assets/images/banner1.jpg" class="img-responsive" style="width:100%">
         <img class="mySlides" src="assets/images/banner2.jpg" class="img-responsive" style="width:100%">
         <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
         <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>
   </div>
   <!-- Slider Text -->
   <div class="header-text banner_content">
      <div class="container">
         <div class="col-md-12 text-center">
            <h1>Unforgottable Travel Experience</h1>
            <p>The world you have never seen</p>
         </div>
      </div>
   </div>
   <!-- Silder Tab -->
   <div class="container-fluid s_silder_tab">
      <div class="panel with-nav-tabs panel-default f_panel">
         <ul class="nav nav-tabs">
            <li></li>
            <li class="active"><a href="#tab1default" data-toggle="tab">HOTELS</a></li>
            <li><a href="#tab2default" data-toggle="tab">FLIGHTS</a></li>
            <li></li>
         </ul>
         <div class="tab-content f_tab">
            <div class="tab-pane fade in active" id="tab1default">
               <form>

                  <div class="row">
                     <div class="col-md-10 col-md-offset-1">
                        <div class="flights-search-box">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group f_group">
                                    <label for="destination"><span>Your Destination</span></label>
                                    <input id="textinput" name="textinput" placeholder="Enter a Destination or Hotel name" class="form-control input-md input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-1 col-md-1-5">
                                 <div class="form-group f_group">
                                    <label for="checkin"><span>Check In</span></label>
                                    <input id="checkin" name="textinput" placeholder="Mm/Dd/Yy" class="form-control input-md input_f checkin_date input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-1 col-md-1-5">
                                 <div class="form-group f_group">
                                    <label for="checkout"><span>Check Out</span></label>
                                    <input id="checkout" name="textinput" placeholder="Mm/Dd/Yy" class="form-control input-md input_f checkout_date input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-1 col-md-1-5">
                                 <div class="form-group f_group">
                                    <label for="email"><span>Kids</span></label>
                                    <input id="textinput" name="textinput" placeholder="01 Kids" class="form-control input-md input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-1 col-md-1-5">
                                 <div class="form-group f_group">
                                    <label for="email"><span>Adult</span></label>
                                    <input id="textinput" name="textinput" placeholder="01 Adults" class="form-control input-md input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-1 col-md-1-5">
                                 <div class="form-group f_group">
                                    <label for="email"><span>Rooms</span></label>
                                    <input id="textinput" name="textinput" placeholder="01 Rooms" class="form-control input-md input_f" type="text">
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <button type="submit" class="btn btn-default f_btnresult">SEARCH RESULTS</button>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div> 
               </form>
            </div>
            <div class="tab-pane fade" id="tab2default">
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
                           <div class="col-md-4">
                              <label class="checkbox-white">
                              <input id="flights-search-direct" type="checkbox" class="js-input">
                              <span class="f_direct">Direct flights only</span>
                              </label>
                           </div>
                        </div>
                        <div id="one-way" class="search_flight">
                           <form>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">Nearby Airports
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">Nearby Airports
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
                                          <input type="text" class="daterange oneway_daterange " name="daterange" />
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
                        <div id="round-trip" class="search_flight hidden">
                           <form>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="custom-input-text top-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">Nearby Airports
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input" placeholder="Origin">
                                             <label class="custom_container">Nearby Airports
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
                                             <label class="custom_container">Nearby Airports
                                             <input type="checkbox" checked="checked">
                                             <span class="custom_checkmark"></span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="custom-input-text bottom-radius">
                                             <i class="fa fa-map-marker"></i>
                                             <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                             <label class="custom_container">Nearby Airports
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
                              <div class="row multi-city-value" id="multi-city-flight">
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
                                                   <label class="custom_container">Nearby Airports
                                                   <input type="checkbox" checked="checked">
                                                   <span class="custom_checkmark"></span>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="custom-input-text bottom-radius">
                                                   <i class="fa fa-map-marker"></i>
                                                   <input type="text" class="flight-search-form-input multi-city-input" placeholder="Origin">
                                                   <label class="custom_container">Nearby Airports
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
         </div>
      </div>
   </div>
</section>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="f_dubai">About Dubai</h3>
            <p class="f_cheap">Cheap flights to Dubai are readily available at tajawal, if you are planning to visit dubai we have a wole bunch of luxury and affordable flights options we always make it easy for you to decide which date you want to travel by giving you the lowest airfare on flights to dubai.</p>
            <br>
            <p class="f_cheap">Choose from tajawal last minute lowcost flight deals to dubai if you are looking for cheap flights to Dubai! We've got the best flights in store for you to the City of Gold! Dubai is known to have a thing for breaking world records, so being home to Burj Khalifa, the world’s tallest tower and JW Marriott Marquis Dubai Hotel, the world’s tallest hotel should come as no surprise! Dubai also holds the title of the city with the world’s longest homemade gold chain.</p>
            <br>
            <p class="f_cheap">Dubai is packed with monuments that attract travelers from all over the world such as Burj Khalifa, Burj al Arab, and the Jumeirah Archaeological site. The Dubai Mall, Souk Madinat Jumeirah and the Dubai Museum are also attractions that tourists visit when in Dubai. </p>
            <br>
            <p class="f_cheap">If you want to plan a visit to Dubai at a time where the weather is not too humid or hot, the best time to do so is from November to April. Known for its tropical desert climate, Dubai is a city that is sunny all year round. However, the summer in Dubai starts around May and lasts until October. Winter in Dubai starts in November and ends in April. The winter in Dubai is warm and short with an average of 23 degrees, Choose the low cost flights to dubai from tajawal.</p>
            <br>
            <p class="f_cheap">When you are looking out for the best flight prices for Dubai, please make sure that you compare all the offers from over 300+ Airlines and go for the deal which suits your style, you can also use our search filters to narrow your search for most desireable results for booking flights to Dubai.</p>
         </div>
      </div>
   </div>
   <h3 class="f_dubai">Cheap Flights to Dubai</h3>
   <div class="container">
      <div class="row">
          <h3 class="f_flights"><i class="fa fa-plane f_plane" aria-hidden="true"></i>Flights to Dubai</h3>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
            
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
      </div>
      <hr>
   </div>


   <div class="container">
      <div class="row">
          <h3 class="f_flights"><i class="fa fa-plane f_plane" aria-hidden="true"></i>Flights from Dubai</h3>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
            
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
         <div class="col-md-3">
           
            <ul class="list_dest">
               <li><a href="#">Atlanta to Dubai</a></li>
               <li><a href="#">Boston to Dubai</a></li>
               <li><a href="#">Delhi to Dubai</a></li>
               <li><a href="#">Honolulu to Dubai</a></li>
               <li><a href="#">Kuwait City to Dubai</a></li>
               <li><a href="#">Riyadh to Dubai</a></li>
            </ul>
         </div>
      </div>
      <hr>
   </div>

   <div class="container">
      <div class="row">
         <h3 class="f_airline">Top airlines flying to Dubai</h3>
         <div class="col-md-2">
            <p class="f_emirates">Emirates</p>
         </div>
         <div class="col-md-2">
            <p class="f_emirates">flydubai</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Saudi Arabian Airlines</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">flynas</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Etihad Airways</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Turkish Airways</p>
         </div>
      </div>
   </div>
   <br>

   <div class="container">
      <div class="row">
        
         <div class="col-md-2">
            <p class="f_emirates">Jet Airways</p>
         </div>
         <div class="col-md-2">
            <p class="f_emirates">Cathay Pacific</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Ethiopian Airlines</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">SriLankan Airlines</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Malaysia Airlines</p>
         </div>
          <div class="col-md-2">
            <p class="f_emirates">Philippine Airlines</p>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>