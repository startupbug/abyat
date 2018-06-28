@extends('layouts.public')
@section('content')
<section class="hotel">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="about_text f_confrm_content">Select Hotels</h3>
            <ul class="list_right">
               <li><a href="#">Search</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="{{route('hotels')}}">Select Hotels</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="{{route('select_room')}}">Select Rooms</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="{{route('hotel_payment')}}">Payment</a></li>
               <i class="fa fa-angle-right f_iconright"></i>
               <li><a href="{{route('confirmation')}}">Confirmation</a></li>
            </ul>
            <div class="f_hotel_border"></div>
         </div>
      </div>
   </div>
   <div class="container f_hotel_main">
      <div class="row">
         <div class="col-md-3">
            <form class="navbar-form f_navform form_border" role="search">
               <div class="input-group f_label_search">
                  <div class="row">
                     <div class="col-md-12">
                        <label>Search</label>
                        <i class="fa fa-angle-up f_angle"></i>
                     </div>
                     <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn f_btn_group">
                           <button class="btn btn-default f_btn_default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <div class="row">
                     <div class="col-md-12">
                        <label>Price</label>
                        <i class="fa fa-angle-up f_angle"></i>
                     </div>
                     <div class="col-md-12">
                        <input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                        <div class="left_rangeslider">Min</div>
                         <div class="right_rangeslider">Max</div>
                     </div>
                  </div>
               </div>
            </div>
            <form>
            <div class="main_rating">
               <div class="col-md-12">
                  <div class="star-rating f_label_search">
                     <label class="f_star_rating">Star Rating</label>
                     <i class="fa fa-angle-up f_angle"></i>
                     <hr class="f_star_rating">
                  </div>
               </div>

               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg " for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
               <div class="checkbox">
                  <label>
                     <input type="checkbox" value="">
                     <div class="star-rating__wrap">
                        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                  <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                  <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                  </div>
                  </label>
               </div>
            </div>
         </form>

              <div class="navbar-form f_navform form_border">
               <div class="input-group f_label_search" style="width: 100%;">
                  <div class="row">
                     <div class="col-md-12">
                        <label>Hotel Rating</label>
                        <i class="fa fa-angle-up f_angle"></i>
                     </div>
                     <div class="col-md-12">
                        <input type="range" min="1" max="100" value="50" class="rangebar_slider" id="myRange">
                        <div class="left_rangeslider">Average</div>
                         <div class="right_rangeslider">Excellent</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="f_main_district">
               <div class="col-md-12 f_label_search">
                  <label class="f_star_rating">District</label>
                  <i class="fa fa-angle-up f_angle"></i>
               </div>
               <form>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Lido Island</label>
                  </div>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Mestre Area</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Venice Island/Etc</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Airport</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>In Mestre</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near Rlalto Bridge</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near San Giuliano Park</label>
                  </div>
                  <a href="#" class="f_more">More</a>
               </form>
            </div>
            <div class="f_main_district">
               <div class="col-md-12 f_label_search">
                  <label class="f_star_rating">Chain</label>
                  <i class="fa fa-angle-up f_angle"></i>
               </div>

               <form>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Lido Island</label>
                  </div>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Mestre Area</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Venice Island/Etc</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Airport</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>In Mestre</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near Rlalto Bridge</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near San Giuliano Park</label>
                  </div>
                  <a href="#" class="f_more">More</a>
               </form>
            </div>
            <div class="f_main_district">
               <div class="col-md-12 f_label_search">
                  <label class="f_star_rating">Property Amenities</label>
                  <i class="fa fa-angle-up f_angle"></i>
               </div>
               <form>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Lido Island</label>
                  </div>
                  <div class="checkbox f_check_box">
                     <label><input type="checkbox" value="">Mestre Area</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Venice Island/Etc</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Airport</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>In Mestre</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near Rlalto Bridge</label>
                  </div>
                  <div class="checkbox disabled f_check_box">
                     <label><input type="checkbox" value="" disabled>Near San Giuliano Park</label>
                  </div>
                  <a href="#" class="f_more">More</a>
               </form>
            </div>
         </div>
         <div class="col-md-9">
         
           @foreach($hotels->HotelDescriptiveInfo as $hotel)

           <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">{{$hotel->HotelInfo->HotelName}}</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">{{$hotel->LocationInfo->Address->AddressLine1}}
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
           @endforeach

            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
            <div class="row f_mainborder">
               <div class="col-md-3">
                  <img src="{{asset('public/assets/images/hotel_image1.jpg')}}" class="img-responsive img_searchresp">
               </div>
               <div class="col-md-6 border_search">
                  <h3 class="search_name">Friendly Venice Suites</h3>
                  <ul class="f_icon_star">
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                     <li><i class="fa fa-star f_star"></i></li>
                  </ul>
                  <p class="f_findcontent">San Marco, 2947 Campo Santo Stefano, San <br>Marco, 30124 Venice, Italy
                  </p>
                  <div class="row f_padding_top">
                     <div class="col-md-2">
                        <div class="box_purple">5</div>
                     </div>
                     <div class="col-md-10">
                        <p class="f_ex">Excellent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <p class="f_total">Total for 18 nights</p>
                  <span class="f_usd">USD</span>
                  <h3 class="f_num1">44,017</h3>
                  <p class="f_green">Total (incl. Tax)</p>
                  <a href="#" class="f_selecthotel">SELECT HOTEL</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection