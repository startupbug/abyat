<?php include('header.php'); ?>
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
   <!-- Silder Text -->
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
<section class="thumbnails">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="f_content">Featured Rooms</h3>
         </div>
         <div class="col-md-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well-none">
               <div id="myCarousel" class="carousel slide">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_one.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_two.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_three.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_one.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_one.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="frontend-box">
                                 <div class="frontend-box-inner">
                                    <div class="img">
                                       <img src="assets/images/image_one.jpg">                                         
                                    </div>
                                    <div class="course-detail-front">
                                       <h5>Luxury with ultra superior room</h5>
                                       <div class="row margin-custom">
                                          <div class="col-md-4 text-left">
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                             <i class="fa fa-star f_star" aria-hidden="true"></i>
                                          </div>
                                          <h3 class="f_reviews">7 Reviews</h3>
                                       </div>
                                       <div class="row s_row_">
                                          <h3 class="f_benjamin">2600 Benjamin Franklin Pkwy, <br> Philadelphia, PA 19130, USA</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/carousel-inner-->
               <a class="left carousel-control f_left" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
               <a class="right carousel-control f_carousalright" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
            </div>
            <!--/myCarousel-->
         </div>
      </div>
   </div>
</section>
<section class="book_image">
   <div class="container-fluid f_media_bg">
      <div class="row">
         <div class="col-md-12">
            <div class="book_content">
               <div class="col-md-7 col-sm-12 col-md-offset-5 col-sm-offset-0">
                  <h1>Book with confidence</h1>
                  <div class="media f_media">
                     <div class="media-left">
                        <div class="border_box">01</div>
                     </div>
                     <div class="media-body f_booking">
                        <h4 class="media-heading f_mediacontent">No booking charges</h4>
                        <p class="f_mediatext f_fontsize">We don't charge you an extra fee for booking a hotel room with us.</p>
                     </div>
                  </div>
                  <div class="media f_media">
                     <div class="media-left">
                        <div class="border_box">02</div>
                     </div>
                     <div class="media-body f_booking">
                        <h4 class="media-heading f_mediacontent">No cancellation fees</h4>
                        <p class="f_mediatext f_fontsize">We don't charge you a cancellation or modification fee in case plans change</p>
                     </div>
                  </div>
                  <div class="media f_media">
                     <div class="media-left">
                        <div class="border_box">03</div>
                     </div>
                     <div class="media-body f_booking">
                        <h4 class="media-heading f_mediacontent">Instant confirmation</h4>
                        <p class="f_mediatext f_fontsize">Instant booking confirmation whether booking online or via the telephone</p>
                     </div>
                  </div>
                  <div class="media f_media">
                     <div class="media-left">
                        <div class="border_box">04</div>
                     </div>
                     <div class="media-body f_booking">
                        <h4 class="media-heading f_mediacontent">Flexible booking</h4>
                        <p class="f_mediatext f_fontsize">You can book up to a whole year in advance until the moment of your stay</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="thumbnails">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="f_content">Popular Destination</h3>
         </div>
         <div class="col-md-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well-none">
               <div id="myCarouse2" class="carousel slide">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image1.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image2.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image3.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image4.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image1.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image1.jpg" class="img-responsive">                   
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image1.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="frontend-box">
                                 <div class="frontend-box-last">
                                    <div class="img">
                                       <img src="assets/images/popular_image1.jpg" class="img-responsive">
                                    </div>
                                    <div class="row margin-custom">
                                       <div class="col-md-8 text-left">
                                          <h5 class="course-detail-front">Atlantis - The Palm</h5>
                                          <span class="paris_f">Paris</span>
                                       </div>
                                       <div class="col-md-4">
                                          <h3 class="f_from">From</h3>
                                          <span class="num_f">$490</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/carousel-inner-->
               <a class="left carousel-control f_left" href="#myCarouse2" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
               <a class="right carousel-control f_carousalright" href="#myCarouse2" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
            </div>
            <!--/myCarousel-->
         </div>
      </div>
   </div>
</section>
<!--<div style="position: relative;">
   <section class="price_index">
      <div class="container">
         <div class="row f_ipad">
            <div class="col-md-4">
               <div class="money_icon"> <i class="fa fa-money f_money"></i></div>
               <h3 class="f_price">Best Price Guarantee</h3>
               <p class="f_tripcontent">At vero eos et accusamus etterum <br>lustodio dignissimos ducimus...</p>
            </div>
            <div class="col-md-4">
               <div class="money_icon"> <i class="fa fa-plane f_money"></i></div>
               <h3 class="f_price">Travel Insurance</h3>
               <p class="f_tripcontent">At vero eos et accusamus etterum <br>lustodio dignissimos ducimus...</p>
            </div>
            <div class="col-md-4">
               <div class="money_icon"> <i class="fa fa-question f_money"></i></div>
               <h3 class="f_price">Need Help?</h3>
               <p class="f_tripcontent">At vero eos et accusamus etterum <br>lustodio dignissimos ducimus...</p>
            </div>
         </div>
      </div>
   </section>
   <section class="triplite_form">
      <div class="container f_formborder">
         <div class="row">
            <div class="col-md-3">
               <h3 class="sign_f">Sign Up for New <br>Updates & Newsletter</h3>
            </div>
            <div class="col-md-9">
               <div class="input-group">
                  <input type="text" class="form-control f_control">
                  <div class="input-group-btn f_inputbtn">
                     <button type="submit" class="btn btn-default f_search">SUBMIT</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>-->
<div class="clearfix"></div>
<?php include('footer.php'); ?>