@extends('layouts.public')
@section('content')
@include('partials.error_section')
<section class="account">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h3 class="s_user_name">Hi, {{Auth::user()->name}}</h3>
       </div>
     </div>
     <div class="row">
       <div class="col-md-3 col-xs-12">
         <div class="wrapper">
           <nav class="s_border">
             <div class="sidebar-header s_nav_bar_header">
               <i class="fa fa-user-circle"></i>Abyat Travel & Tours
             </div>
             <ul class="list-unstyled components s_ul_list">
               <li>
                 <a href="{{route('mybooking')}}">
                   <i class="fa fa-address-book"></i>
                   My Bookings
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li class="active">
                 <a href="{{route('dashboard')}}">
                   <i class="fa fa-user"></i>
                   My Account
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
               <li>
                 <a href="{{route('setting')}}">
                   <i class="fa fa-gear"></i>
                   Setting
                   <i class="fa fa-angle-right s_float_right"></i>
                 </a>
               </li>
             </ul>
           </nav>
         </div>
         <div class="s_button_logout_form">
           <a href="{{route('logout_user')}}" class="btn s_button_logout">LOGOUT</a>
           <!-- <button type="button" class="btn s_button_logout" name="button">LOGOUT</button> -->
         </div>
       </div>
       <div class="col-md-9 col-xs-12">
         <div class="wrapper">
           <div class="s_border s_margin_20">
             <div class="s_nav_bar_header">
               <i class="fa fa-user"></i>MY Account
             </div>
             <div class="s_sub_heading_button">
               <button type="button" class="btn s_sub_button active" name="button">Account Details</button>
             </div>
             <form class="s_dashboard_form" action="{{route('update_user_info',['id'=>Auth::user()->id])}}" method="POST">
              {{csrf_field()}}
               <div class="s_tab_body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="username">Username <span>*</span> </label>
                      <input type="text" class="form-control s_form_field" id="username" placeholder="Enter User Name" name="username" value="{{Auth::user()->profile->username}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="fullname">Full Name <span>*</span> </label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control s_form_field" id="fullname" name="name_title">
                        <option>Title</option>
                        <option value="Mr" @if(Auth::user()->name_title == 'Mr' ) selected=selected @endif>Mr</option>
                        <option value="Mrs" @if(Auth::user()->name_title == 'Mrs' ) selected=selected @endif>Mrs</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="First" name="name"  value="{{Auth::user()->name}}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="Middle" value="{{Auth::user()->middle_name}}" name="middle_name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="Last" name="last_name"  value="{{Auth::user()->last_name}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="phone">Phone <span>*</span> </label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control s_form_field" name="phone_code" id="phone">
                        <option value="+971" @if(Auth::user()->profile->phone_code == +971) selected=selected @endif >+971</option>
                        <option value="+921" @if(Auth::user()->profile->phone_code == +921) selected=selected @endif >+921</option>
                        <option value="+333" @if(Auth::user()->profile->phone_code == +333) selected=selected @endif >+333</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="phone" name="phone" class="form-control s_form_field" value="{{Auth::user()->profile->phone}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email <span>*</span> </label>
                      <input type="email" class="form-control s_form_field" id="email" placeholder="(required)" name="email" value="{{Auth::user()->email}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="address">Address <span>*</span> </label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" id="address" placeholder="(required)" name="address" value="{{Auth::user()->profile->address}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control s_form_field" placeholder="(required)" name="secondary_address" value="{{Auth::user()->profile->secondary_address}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country <span>*</span> </label>
                      <select class="form-control s_form_field" name="country" id="country">
                        <option selected>Select a Country</option>
                        <option value="United_States" @if(Auth::user()->profile->country == 'United_States' ) selected=selected @endif>United States</option> 
                        <option value="United_Kingdom" @if(Auth::user()->profile->country == 'United_Kingdom') selected=selected @endif>United Kingdom</option> 
                        <option value="Afghanistan" @if(Auth::user()->profile->country == 'Afghanistan') selected=selected @endif>Afghanistan</option> 
                        <option value="Albania" @if(Auth::user()->profile->country == 'Albania' ) selected=selected @endif>Albania</option> 
                        <option value="Algeria" @if(Auth::user()->profile->country == 'Algeria' ) selected=selected @endif>Algeria</option> 
                        <option value="American_Samoa" @if(Auth::user()->profile->country == 'American_Samoa' ) selected=selected @endif>American Samoa</option> 
                        <option value="Andorra" @if(Auth::user()->profile->country == 'Andorra' ) selected=selected @endif>Andorra</option> 
                        <option value="Angola" @if(Auth::user()->profile->country == 'Angola' ) selected=selected @endif>Angola</option> 
                        <option value="Anguilla" @if(Auth::user()->profile->country == 'Anguilla' ) selected=selected @endif>Anguilla</option> 
                        <option value="Antarctica" @if(Auth::user()->profile->country == 'Antarctica' ) selected=selected @endif>Antarctica</option> 
                        <option value="Antigua_and_Barbuda" @if(Auth::user()->profile->country == 'Antigua_and_Barbuda' ) selected=selected @endif>Antigua and Barbuda</option> 
                        <option value="Argentina" @if(Auth::user()->profile->country == 'Argentina' ) selected=selected @endif>Argentina</option> 
                        <option value="Armenia" @if(Auth::user()->profile->country == 'Armenia' ) selected=selected @endif>Armenia</option> 
                        <option value="Aruba" @if(Auth::user()->profile->country == 'Aruba' ) selected=selected @endif>Aruba</option> 
                        <option value="Australia" @if(Auth::user()->profile->country == 'Australia' ) selected=selected @endif>Australia</option> 
                        <option value="Austria" @if(Auth::user()->profile->country == 'Austria' ) selected=selected @endif>Austria</option> 
                        <option value="Azerbaijan" @if(Auth::user()->profile->country == 'Azerbaijan' ) selected=selected @endif>Azerbaijan</option> 
                        <option value="Bahamas" @if(Auth::user()->profile->country == 'Bahamas' ) selected=selected @endif>Bahamas</option> 
                        <option value="Bahrain" @if(Auth::user()->profile->country == 'Bahrain' ) selected=selected @endif>Bahrain</option> 
                        <option value="Bangladesh" @if(Auth::user()->profile->country == 'Bangladesh' ) selected=selected @endif>Bangladesh</option> 
                        <option value="Barbados" @if(Auth::user()->profile->country == 'Barbados' ) selected=selected @endif>Barbados</option> 
                        <option value="Belarus" @if(Auth::user()->profile->country == 'Belarus' ) selected=selected @endif>Belarus</option> 
                        <option value="Belgium" @if(Auth::user()->profile->country == 'Belgium' ) selected=selected @endif>Belgium</option> 
                        <option value="Belize" @if(Auth::user()->profile->country == 'Belize' ) selected=selected @endif>Belize</option> 
                        <option value="Benin" @if(Auth::user()->profile->country == 'Benin' ) selected=selected @endif>Benin</option> 
                        <option value="Bermuda" @if(Auth::user()->profile->country == 'Bermuda' ) selected=selected @endif>Bermuda</option> 
                        <option value="Bhutan" @if(Auth::user()->profile->country == 'Bhutan' ) selected=selected @endif>Bhutan</option> 
                        <option value="Bolivia" @if(Auth::user()->profile->country == 'Bolivia' ) selected=selected @endif>Bolivia</option> 
                        <option value="Bosnia_and_Herzegovina" @if(Auth::user()->profile->country == 'Bosnia_and_Herzegovina' ) selected=selected @endif>Bosnia and Herzegovina</option> 
                        <option value="Botswana" @if(Auth::user()->profile->country == 'Botswana' ) selected=selected @endif>Botswana</option> 
                        <option value="Bouvet_Island" @if(Auth::user()->profile->country == 'Bouvet_Island' ) selected=selected @endif>Bouvet Island</option> 
                        <option value="Brazil" @if(Auth::user()->profile->country == 'Brazil' ) selected=selected @endif>Brazil</option> 
                        <option value="British_Indian_Ocean_Territory" @if(Auth::user()->profile->country == 'British_Indian_Ocean_Territory' ) selected=selected @endif>British Indian Ocean Territory</option> 
                        <option value="Brunei_Darussalam" @if(Auth::user()->profile->country == 'Brunei_Darussalam' ) selected=selected @endif>Brunei Darussalam</option> 
                        <option value="Bulgaria" @if(Auth::user()->profile->country == 'Bulgaria' ) selected=selected @endif>Bulgaria</option> 
                        <option value="Burkina_Faso" @if(Auth::user()->profile->country == 'Burkina_Faso' ) selected=selected @endif>Burkina Faso</option> 
                        <option value="Burundi" @if(Auth::user()->profile->country == 'Burundi' ) selected=selected @endif>Burundi</option> 
                        <option value="Cambodia" @if(Auth::user()->profile->country == 'Cambodia' ) selected=selected @endif>Cambodia</option> 
                        <option value="Cameroon" @if(Auth::user()->profile->country == 'Cameroon' ) selected=selected @endif>Cameroon</option> 
                        <option value="Canada" @if(Auth::user()->profile->country == 'Canada' ) selected=selected @endif>Canada</option> 
                        <option value="Cape_Verde" @if(Auth::user()->profile->country == 'Cape_Verde' ) selected=selected @endif>Cape Verde</option> 
                        <option value="Cayman_Islands" @if(Auth::user()->profile->country == 'Cayman_Islands' ) selected=selected @endif>Cayman Islands</option> 
                        <option value="Central_African_Republic" @if(Auth::user()->profile->country == 'Central_African_Republic' ) selected=selected @endif>Central African Republic</option> 
                        <option value="Chad" @if(Auth::user()->profile->country == 'Chad' ) selected=selected @endif>Chad</option> 
                        <option value="Chile" @if(Auth::user()->profile->country == 'Chile' ) selected=selected @endif>Chile</option> 
                        <option value="China" @if(Auth::user()->profile->country == 'China' ) selected=selected @endif>China</option> 
                        <option value="Christmas_Island" @if(Auth::user()->profile->country == 'Christmas_Island' ) selected=selected @endif>Christmas Island</option> 
                        <option value="Cocos_Keeling_Islands" @if(Auth::user()->profile->country == 'Cocos_Keeling_Islands' ) selected=selected @endif>Cocos (Keeling) Islands</option> 
                        <option value="Colombia" @if(Auth::user()->profile->country == 'Colombia' ) selected=selected @endif>Colombia</option> 
                        <option value="Comoros" @if(Auth::user()->profile->country == 'Comoros' ) selected=selected @endif>Comoros</option> 
                        <option value="Congo" @if(Auth::user()->profile->country == 'Congo' ) selected=selected @endif>Congo</option> 
                        <option value="Congo_The_Democratic_Republic_of_The" @if(Auth::user()->profile->country == 'Congo_The_Democratic_Republic_of_The' ) selected=selected @endif>Congo, The Democratic Republic of The</option> 
                        <option value="Cook_Islands" @if(Auth::user()->profile->country == 'Cook_Islands ' ) selected=selected @endif>Cook Islands</option> 
                        <option value="Costa_Rica" @if(Auth::user()->profile->country == 'Costa_Rica' ) selected=selected @endif>Costa Rica</option> 
                        <option value="Cote_D_ivoire" @if(Auth::user()->profile->country == 'Cote_D_ivoire' ) selected=selected @endif>Cote D'ivoire</option> 
                        <option value="Croatia" @if(Auth::user()->profile->country == 'Croatia' ) selected=selected @endif>Croatia</option> 
                        <option value="Cuba" @if(Auth::user()->profile->country == 'Cuba' ) selected=selected @endif>Cuba</option> 
                        <option value="Cyprus" @if(Auth::user()->profile->country == 'Cyprus' ) selected=selected @endif>Cyprus</option> 
                        <option value="Czech_Republic" @if(Auth::user()->profile->country == 'Czech_Republic' ) selected=selected @endif>Czech Republic</option> 
                        <option value="Denmark" @if(Auth::user()->profile->country == 'Denmark' ) selected=selected @endif>Denmark</option> 
                        <option value="Djibouti" @if(Auth::user()->profile->country == 'Djibouti' ) selected=selected @endif>Djibouti</option> 
                        <option value="Dominica" @if(Auth::user()->profile->country == 'Dominica' ) selected=selected @endif>Dominica</option> 
                        <option value="Dominican_Republic" @if(Auth::user()->profile->country == 'Dominican_Republic' ) selected=selected @endif>Dominican Republic</option> 
                        <option value="Ecuador" @if(Auth::user()->profile->country == 'Ecuador' ) selected=selected @endif>Ecuador</option> 
                        <option value="Egypt" @if(Auth::user()->profile->country == 'Egypt' ) selected=selected @endif>Egypt</option> 
                        <option value="El_Salvador" @if(Auth::user()->profile->country == 'El_Salvador' ) selected=selected @endif>El Salvador</option> 
                        <option value="Equatorial_Guinea" @if(Auth::user()->profile->country == 'Equatorial_Guinea' ) selected=selected @endif>Equatorial Guinea</option> 
                        <option value="Eritrea" @if(Auth::user()->profile->country == 'Eritrea' ) selected=selected @endif>Eritrea</option> 
                        <option value="Estonia" @if(Auth::user()->profile->country == 'Estonia' ) selected=selected @endif>Estonia</option> 
                        <option value="Ethiopia" @if(Auth::user()->profile->country == 'Ethiopia' ) selected=selected @endif>Ethiopia</option> 
                        <option value="Falkland_Islands_Malvinas" @if(Auth::user()->profile->country == 'Falkland_Islands_Malvinas' ) selected=selected @endif>Falkland Islands (Malvinas)</option> 
                        <option value="Faroe_Islands" @if(Auth::user()->profile->country == 'Faroe_Islands' ) selected=selected @endif>Faroe Islands</option> 
                        <option value="Fiji" @if(Auth::user()->profile->country == 'Fiji' ) selected=selected @endif>Fiji</option> 
                        <option value="Finland" @if(Auth::user()->profile->country == 'Finland' ) selected=selected @endif>Finland</option> 
                        <option value="France" @if(Auth::user()->profile->country == 'France' ) selected=selected @endif>France</option> 
                        <option value="French_Guiana" @if(Auth::user()->profile->country == 'French_Guiana' ) selected=selected @endif>French Guiana</option> 
                        <option value="French_Polynesia" @if(Auth::user()->profile->country == 'French_Polynesia' ) selected=selected @endif>French Polynesia</option> 
                        <option value="French_Southern_Territories" @if(Auth::user()->profile->country == 'French_Southern_Territories' ) selected=selected @endif>French Southern Territories</option> 
                        <option value="Gabon" @if(Auth::user()->profile->country == 'Gabon' ) selected=selected @endif>Gabon</option> 
                        <option value="Gambia" @if(Auth::user()->profile->country == 'Gambia' ) selected=selected @endif>Gambia</option> 
                        <option value="Georgia" @if(Auth::user()->profile->country == 'Georgia' ) selected=selected @endif>Georgia</option> 
                        <option value="Germany" @if(Auth::user()->profile->country == 'Germany' ) selected=selected @endif>Germany</option> 
                        <option value="Ghana" @if(Auth::user()->profile->country == 'Ghana' ) selected=selected @endif>Ghana</option> 
                        <option value="Gibraltar" @if(Auth::user()->profile->country == 'Gibraltar' ) selected=selected @endif>Gibraltar</option> 
                        <option value="Greece" @if(Auth::user()->profile->country == 'Greece' ) selected=selected @endif>Greece</option> 
                        <option value="Greenland" @if(Auth::user()->profile->country == 'Greenland' ) selected=selected @endif>Greenland</option> 
                        <option value="Grenada" @if(Auth::user()->profile->country == 'Grenada' ) selected=selected @endif>Grenada</option> 
                        <option value="Guadeloupe" @if(Auth::user()->profile->country == 'Guadeloupe' ) selected=selected @endif>Guadeloupe</option> 
                        <option value="Guam" @if(Auth::user()->profile->country == 'Guam' ) selected=selected @endif>Guam</option> 
                        <option value="Guatemala" @if(Auth::user()->profile->country == 'Guatemala' ) selected=selected @endif>Guatemala</option> 
                        <option value="Guinea" @if(Auth::user()->profile->country == 'Guinea' ) selected=selected @endif>Guinea</option> 
                        <option value="Guinea_bissau" @if(Auth::user()->profile->country == 'Guinea_bissau' ) selected=selected @endif>Guinea-bissau</option> 
                        <option value="Guyana" @if(Auth::user()->profile->country == 'Guyana' ) selected=selected @endif>Guyana</option> 
                        <option value="Haiti" @if(Auth::user()->profile->country == 'Haiti' ) selected=selected @endif>Haiti</option> 
                        <option value="Heard_Island_and_Mcdonald_Islands"
                          @if(Auth::user()->profile->country == 'Heard_Island_and_Mcdonald_Islands' )  selected=selected @endif>Heard Island and Mcdonald Islands
                        </option> 
                        <option value="Holy_See_Vatican_City_State" @if(Auth::user()->profile->country == 'Holy_See_Vatican_City_State' ) selected=selected @endif>Holy See (Vatican City State)</option> 
                        <option value="Honduras" @if(Auth::user()->profile->country == 'Honduras' ) selected=selected @endif>Honduras</option> 
                        <option value="Hong_Kong" @if(Auth::user()->profile->country == 'Hong_Kong' ) selected=selected @endif>Hong Kong</option> 
                        <option value="Hungary" @if(Auth::user()->profile->country == 'Hungary' ) selected=selected @endif>Hungary</option> 
                        <option value="Iceland" @if(Auth::user()->profile->country == 'Iceland' ) selected=selected @endif>Iceland</option> 
                        <option value="India" @if(Auth::user()->profile->country == 'India' ) selected=selected @endif>India</option> 
                        <option value="Indonesia" @if(Auth::user()->profile->country == 'Indonesia' ) selected=selected @endif>Indonesia</option> 
                        <option value="Iran_Islamic_Republic_of" @if(Auth::user()->profile->country == 'Iran_Islamic_Republic_of' ) selected=selected @endif>Iran, Islamic Republic of</option> 
                        <option value="Iraq" @if(Auth::user()->profile->country == 'Iraq' ) selected=selected @endif>Iraq</option> 
                        <option value="Ireland" @if(Auth::user()->profile->country == 'Ireland' ) selected=selected @endif>Ireland</option> 
                        <option value="Israel" @if(Auth::user()->profile->country == 'Israel' ) selected=selected @endif>Israel</option> 
                        <option value="Italy" @if(Auth::user()->profile->country == 'Italy' ) selected=selected @endif>Italy</option> 
                        <option value="Jamaica" @if(Auth::user()->profile->country == 'Jamaica' ) selected=selected @endif>Jamaica</option> 
                        <option value="Japan" @if(Auth::user()->profile->country == 'Japan' ) selected=selected @endif>Japan</option> 
                        <option value="Jordan" @if(Auth::user()->profile->country == 'Jordan' ) selected=selected @endif>Jordan</option> 
                        <option value="Kazakhstan" @if(Auth::user()->profile->country == 'Kazakhstan' ) selected=selected @endif>Kazakhstan</option> 
                        <option value="Kenya" @if(Auth::user()->profile->country == 'Kenya' ) selected=selected @endif>Kenya</option> 
                        <option value="Kiribati" @if(Auth::user()->profile->country == 'Kiribati' ) selected=selected @endif>Kiribati</option> 
                        <option value="Korea_Democratic_People_Republic_of" @if(Auth::user()->profile->country == 'Korea_Democratic_People_Republic_of ' ) selected=selected @endif>Korea, Democratic People's Republic of</option> 
                        <option value="Korea_Republic_of" @if(Auth::user()->profile->country == 'Korea_Republic_of' ) selected=selected @endif>Korea, Republic of</option> 
                        <option value="Kuwait" @if(Auth::user()->profile->country == 'Kuwait' ) selected=selected @endif>Kuwait</option> 
                        <option value="Kyrgyzstan" @if(Auth::user()->profile->country == 'Kyrgyzstan' ) selected=selected @endif>Kyrgyzstan</option> 
                        <option value="Lao_People_Democratic_Republic " @if(Auth::user()->profile->country == 'Lao_People_Democratic_Republic ' ) selected=selected @endif>Lao People's Democratic Republic</option> 
                        <option value="Latvia" @if(Auth::user()->profile->country == 'Latvia' ) selected=selected @endif>Latvia</option> 
                        <option value="Lebanon" @if(Auth::user()->profile->country == 'Lebanon' ) selected=selected @endif>Lebanon</option> 
                        <option value="Lesotho" @if(Auth::user()->profile->country == 'Lesotho' ) selected=selected @endif>Lesotho</option> 
                        <option value="Liberia" @if(Auth::user()->profile->country == 'Liberia' ) selected=selected @endif>Liberia</option> 
                        <option value="Libyan_Arab_Jamahiriya" @if(Auth::user()->profile->country == 'Libyan_Arab_Jamahiriya' ) selected=selected @endif>Libyan Arab Jamahiriya</option> 
                        <option value="Liechtenstein" @if(Auth::user()->profile->country == 'Liechtenstein ' ) selected=selected @endif>Liechtenstein</option> 
                        <option value="Lithuania" @if(Auth::user()->profile->country == 'Lithuania ' ) selected=selected @endif>Lithuania</option> 
                        <option value="Luxembourg" @if(Auth::user()->profile->country == 'Luxembourg ' ) selected=selected @endif>Luxembourg</option> 
                        <option value="Macao" @if(Auth::user()->profile->country == 'Macao' ) selected=selected @endif>Macao</option> 
                        <option value="Macedonia_The_Former_Yugoslav_Republic_of" @if(Auth::user()->profile->country == 'Macedonia_The_Former_Yugoslav_Republic_of ' ) selected=selected @endif>Macedonia, The Former Yugoslav Republic of</option> 
                        <option value="Madagascar" @if(Auth::user()->profile->country == 'Madagascar' ) selected=selected @endif>Madagascar</option> 
                        <option value="Malawi" @if(Auth::user()->profile->country == 'Malawi' ) selected=selected @endif>Malawi</option> 
                        <option value="Malaysia" @if(Auth::user()->profile->country == 'Malaysia' ) selected=selected @endif>Malaysia</option> 
                        <option value="Maldives" @if(Auth::user()->profile->country == 'Maldives' ) selected=selected @endif>Maldives</option> 
                        <option value="Mali" @if(Auth::user()->profile->country == 'Mali ' ) selected=selected @endif>Mali</option> 
                        <option value="
                        " @if(Auth::user()->profile->country == 'Malta' ) selected=selected @endif>Malta</option> 
                        <option value="Marshall_Islands" @if(Auth::user()->profile->country == 'Marshall_Islands' ) selected=selected @endif>Marshall Islands</option> 
                        <option value="Martinique" @if(Auth::user()->profile->country == 'Martinique' ) selected=selected @endif>Martinique</option> 
                        <option value="Mauritania" @if(Auth::user()->profile->country == 'Mauritania' ) selected=selected @endif>Mauritania</option> 
                        <option value="Mauritius" @if(Auth::user()->profile->country == 'Mauritius' ) selected=selected @endif>Mauritius</option> 
                        <option value="Mayotte" @if(Auth::user()->profile->country == 'Mayotte' ) selected=selected @endif>Mayotte</option> 
                        <option value="Mexico" @if(Auth::user()->profile->country == 'Mexico' ) selected=selected @endif>Mexico</option> 
                        <option value="Micronesia_Federated_States_of" @if(Auth::user()->profile->country == 'Micronesia_Federated_States_of' ) selected=selected @endif>Micronesia, Federated States of</option> 
                        <option value="Moldova_Republic_of" @if(Auth::user()->profile->country == 'Moldova_Republic_of' ) selected=selected @endif>Moldova, Republic of</option> 
                        <option value="Monaco" @if(Auth::user()->profile->country == 'Monaco' ) selected=selected @endif>Monaco</option> 
                        <option value="Mongolia" @if(Auth::user()->profile->country == 'Mongolia' ) selected=selected @endif>Mongolia</option> 
                        <option value="Montserrat" @if(Auth::user()->profile->country == 'Montserrat' ) selected=selected @endif>Montserrat</option> 
                        <option value="Morocco" @if(Auth::user()->profile->country == 'Morocco' ) selected=selected @endif>Morocco</option> 
                        <option value="Mozambique" @if(Auth::user()->profile->country == 'Mozambique ' ) selected=selected @endif>Mozambique</option> 
                        <option value="Myanmar" @if(Auth::user()->profile->country == 'Myanmar' ) selected=selected @endif>Myanmar</option> 
                        <option value="Namibia" @if(Auth::user()->profile->country == 'Namibia' ) selected=selected @endif>Namibia</option> 
                        <option value="Nauru" @if(Auth::user()->profile->country == 'Nauru' ) selected=selected @endif>Nauru</option> 
                        <option value="Nepal" @if(Auth::user()->profile->country == 'Nepal' ) selected=selected @endif>Nepal</option> 
                        <option value="Netherlands" @if(Auth::user()->profile->country == 'Netherlands' ) selected=selected @endif>Netherlands</option> 
                        <option value="Netherlands_Antilles" @if(Auth::user()->profile->country == 'Netherlands_Antilles' ) selected=selected @endif>Netherlands Antilles</option> 
                        <option value="New_Caledonia" @if(Auth::user()->profile->country == 'New_Caledonia' ) selected=selected @endif>New Caledonia</option> 
                        <option value="New_Zealand" @if(Auth::user()->profile->country == 'New_Zealand' ) selected=selected @endif>New Zealand</option> 
                        <option value="Nicaragua" @if(Auth::user()->profile->country == 'Nicaragua' ) selected=selected @endif>Nicaragua</option> 
                        <option value="Niger" @if(Auth::user()->profile->country == 'Niger' ) selected=selected @endif>Niger</option> 
                        <option value="Nigeria" @if(Auth::user()->profile->country == 'Nigeria' ) selected=selected @endif>Nigeria</option> 
                        <option value="Niue" @if(Auth::user()->profile->country == 'Niue' ) selected=selected @endif>Niue</option> 
                        <option value="Norfolk_Island" @if(Auth::user()->profile->country == 'Norfolk_Island' ) selected=selected @endif>Norfolk Island</option> 
                        <option value="Northern_Mariana_Islands" @if(Auth::user()->profile->country == 'Northern_Mariana_Islands' ) selected=selected @endif>Northern Mariana Islands</option> 
                        <option value="Norway" @if(Auth::user()->profile->country == 'Norway' ) selected=selected @endif>Norway</option> 
                        <option value="Oman" @if(Auth::user()->profile->country == 'Oman' ) selected=selected @endif>Oman</option> 
                        <option value="Pakistan" @if(Auth::user()->profile->country == 'Pakistan' ) selected=selected @endif>Pakistan</option> 
                        <option value="Palau" @if(Auth::user()->profile->country == 'Palau' ) selected=selected @endif>Palau</option> 
                        <option value="Palestinian_Territory_Occupied" @if(Auth::user()->profile->country == 'Palestinian_Territory_Occupied' ) selected=selected @endif>Palestinian Territory, Occupied</option> 
                        <option value="Panama" @if(Auth::user()->profile->country == 'Panama' ) selected=selected @endif>Panama</option> 
                        <option value="Papua_New_Guinea" @if(Auth::user()->profile->country == 'Papua_New_Guinea' ) selected=selected @endif>Papua New Guinea</option> 
                        <option value="Paraguay" @if(Auth::user()->profile->country == 'Paraguay' ) selected=selected @endif>Paraguay</option> 
                        <option value="Peru" @if(Auth::user()->profile->country == 'Peru' ) selected=selected @endif>Peru</option> 
                        <option value="Philippines" @if(Auth::user()->profile->country == 'Philippines' ) selected=selected @endif>Philippines</option> 
                        <option value="Pitcairn" @if(Auth::user()->profile->country == 'Pitcairn' ) selected=selected @endif>Pitcairn</option> 
                        <option value="Poland" @if(Auth::user()->profile->country == 'Poland' ) selected=selected @endif>Poland</option> 
                        <option value="Portugal" @if(Auth::user()->profile->country == 'Portugal' ) selected=selected @endif>Portugal</option> 
                        <option value="Puerto_Rico" @if(Auth::user()->profile->country == 'Puerto_Rico' ) selected=selected @endif>Puerto Rico</option> 
                        <option value="Qatar" @if(Auth::user()->profile->country == 'Qatar' ) selected=selected @endif>Qatar</option> 
                        <option value="Reunion" @if(Auth::user()->profile->country == 'Reunion' ) selected=selected @endif>Reunion</option> 
                        <option value="Romania" @if(Auth::user()->profile->country == 'Romania' ) selected=selected @endif>Romania</option> 
                        <option value="Russian_Federation" @if(Auth::user()->profile->country == 'Russian_Federation' ) selected=selected @endif>Russian Federation</option> 
                        <option value="Rwanda" @if(Auth::user()->profile->country == 'Rwanda' ) selected=selected @endif>Rwanda</option> 
                        <option value="Saint_Helena" @if(Auth::user()->profile->country == 'Saint_Helena' ) selected=selected @endif>Saint Helena</option> 
                        <option value="Saint_Kitts_and_Nevis" @if(Auth::user()->profile->country == 'Saint_Kitts_and_Nevis' ) selected=selected @endif>Saint Kitts and Nevis</option> 
                        <option value="Saint_Lucia" @if(Auth::user()->profile->country == 'Saint_Lucia' ) selected=selected @endif>Saint Lucia</option> 
                        <option value="Saint_Pierre_and_Miquelon" @if(Auth::user()->profile->country == 'Saint_Pierre_and_Miquelon' ) selected=selected @endif>Saint Pierre and Miquelon</option> 
                        <option value="Saint_Vincent_and_The_Grenadines" @if(Auth::user()->profile->country == 'Saint_Vincent_and_The_Grenadines' ) selected=selected @endif>Saint Vincent and The Grenadines</option> 
                        <option value="Samoa" @if(Auth::user()->profile->country == 'Samoa' ) selected=selected @endif>Samoa</option> 
                        <option value="San_Marino" @if(Auth::user()->profile->country == 'San_Marino' ) selected=selected @endif>San Marino</option> 
                        <option value="Sao_Tome_and_Principe" @if(Auth::user()->profile->country == 'Sao_Tome_and_Principe' ) selected=selected @endif>Sao Tome and Principe</option> 
                        <option value="Saudi_Arabia" @if(Auth::user()->profile->country == 'Saudi_Arabia' ) selected=selected @endif>Saudi Arabia</option> 
                        <option value="Senegal" @if(Auth::user()->profile->country == 'Senegal' ) selected=selected @endif>Senegal</option> 
                        <option value="Serbia_and_Montenegro" @if(Auth::user()->profile->country == 'Serbia_and_Montenegro' ) selected=selected @endif>Serbia and Montenegro</option> 
                        <option value="Seychelles" @if(Auth::user()->profile->country == 'Seychelles' ) selected=selected @endif>Seychelles</option> 
                        <option value="Sierra_Leone" @if(Auth::user()->profile->country == 'Sierra_Leone' ) selected=selected @endif>Sierra Leone</option> 
                        <option value="Singapore" @if(Auth::user()->profile->country == 'Singapore' ) selected=selected @endif>Singapore</option> 
                        <option value="Slovakia" @if(Auth::user()->profile->country == 'Slovakia' ) selected=selected @endif>Slovakia</option> 
                        <option value="Slovenia" @if(Auth::user()->profile->country == 'Slovenia' ) selected=selected @endif>Slovenia</option> 
                        <option value="Solomon_Islands" @if(Auth::user()->profile->country == 'Solomon_Islands' ) selected=selected @endif>Solomon Islands</option> 
                        <option value="Somalia" @if(Auth::user()->profile->country == 'Somalia' ) selected=selected @endif>Somalia</option> 
                        <option value="South_Africa" @if(Auth::user()->profile->country == 'South_Africa' ) selected=selected @endif>South Africa</option> 
                        <option value="South_Georgia_and_The_South_Sandwich_Islands" @if(Auth::user()->profile->country == 'South_Georgia_and_The_South_Sandwich_Islands' ) selected=selected @endif>South Georgia and The South Sandwich Islands</option> 
                        <option value="Spain" @if(Auth::user()->profile->country == 'Spain' ) selected=selected @endif>Spain</option> 
                        <option value="Sri_Lanka" @if(Auth::user()->profile->country == 'Sri_Lanka' ) selected=selected @endif>Sri Lanka</option> 
                        <option value="Sudan" @if(Auth::user()->profile->country == 'Sudan' ) selected=selected @endif>Sudan</option> 
                        <option value="Suriname" @if(Auth::user()->profile->country == 'Suriname' ) selected=selected @endif>Suriname</option> 
                        <option value="Svalbard_and_Jan_Mayen" @if(Auth::user()->profile->country == 'Svalbard_and_Jan_Mayen' ) selected=selected @endif>Svalbard and Jan Mayen</option> 
                        <option value="Swaziland" @if(Auth::user()->profile->country == 'Swaziland' ) selected=selected @endif>Swaziland</option> 
                        <option value="Sweden" @if(Auth::user()->profile->country == 'Sweden' ) selected=selected @endif>Sweden</option> 
                        <option value="Switzerland" @if(Auth::user()->profile->country == 'Switzerland' ) selected=selected @endif>Switzerland</option> 
                        <option value="Syrian_Arab_Republic" @if(Auth::user()->profile->country == 'Syrian_Arab_Republic' ) selected=selected @endif>Syrian Arab Republic</option> 
                        <option value="Taiwan_Province_of_China" @if(Auth::user()->profile->country == 'Taiwan_Province_of_China' ) selected=selected @endif>Taiwan, Province of China</option> 
                        <option value="Tajikistan" @if(Auth::user()->profile->country == 'Tajikistan' ) selected=selected @endif>Tajikistan</option> 
                        <option value="Tanzania_United_Republic_of" @if(Auth::user()->profile->country == 'Tanzania_United_Republic_of' ) selected=selected @endif>Tanzania, United Republic of</option> 
                        <option value="Thailand" @if(Auth::user()->profile->country == 'Thailand' ) selected=selected @endif>Thailand</option> 
                        <option value="Timor_leste" @if(Auth::user()->profile->country == 'Timor_leste' ) selected=selected @endif>Timor-leste</option> 
                        <option value="Togo" @if(Auth::user()->profile->country == 'Togo' ) selected=selected @endif>Togo</option> 
                        <option value="Tokelau" @if(Auth::user()->profile->country == 'Tokelau' ) selected=selected @endif>Tokelau</option> 
                        <option value="Tonga" @if(Auth::user()->profile->country == 'Tonga' ) selected=selected @endif>Tonga</option> 
                        <option value="Trinidad_and_Tobago" @if(Auth::user()->profile->country == 'Trinidad_and_Tobago' ) selected=selected @endif>Trinidad and Tobago</option> 
                        <option value="Tunisia" @if(Auth::user()->profile->country == 'Tunisia' ) selected=selected @endif>Tunisia</option> 
                        <option value="Turkey" @if(Auth::user()->profile->country == 'Turkey' ) selected=selected @endif>Turkey</option> 
                        <option value="Turkmenistan" @if(Auth::user()->profile->country == 'Turkmenistan' ) selected=selected @endif>Turkmenistan</option> 
                        <option value="Turks_and_Caicos_Islands" @if(Auth::user()->profile->country == 'Turks_and_Caicos_Islands' ) selected=selected @endif>Turks and Caicos Islands</option> 
                        <option value="Tuvalu" @if(Auth::user()->profile->country == 'Tuvalu' ) selected=selected @endif>Tuvalu</option> 
                        <option value="Uganda" @if(Auth::user()->profile->country == 'Uganda' ) selected=selected @endif>Uganda</option> 
                        <option value="Ukraine" @if(Auth::user()->profile->country == 'Ukraine' ) selected=selected @endif>Ukraine</option> 
                        <option value="United_Arab_Emirates" @if(Auth::user()->profile->country == 'United_Arab_Emirates' ) selected=selected @endif>United Arab Emirates</option> 
                        <option value="United_Kingdom" @if(Auth::user()->profile->country == 'United_Kingdom' ) selected=selected @endif>United Kingdom</option> 
                        <option value="United_States" @if(Auth::user()->profile->country == 'United_States' ) selected=selected @endif>United States</option> 
                        <option value="United_States_Minor_Outlying_Islands" @if(Auth::user()->profile->country == 'United_States_Minor_Outlying_Islands' ) selected=selected @endif>United States Minor Outlying Islands</option> 
                        <option value="Uruguay" @if(Auth::user()->profile->country == 'Uruguay' ) selected=selected @endif>Uruguay</option> 
                        <option value="Uzbekistan" @if(Auth::user()->profile->country == 'Uzbekistan' ) selected=selected @endif>Uzbekistan</option> 
                        <option value="Vanuatu" @if(Auth::user()->profile->country == 'Vanuatu' ) selected=selected @endif>Vanuatu</option> 
                        <option value="Venezuela" @if(Auth::user()->profile->country == 'Venezuela' ) selected=selected @endif>Venezuela</option> 
                        <option value="Viet_Nam" @if(Auth::user()->profile->country == 'Viet_Nam' ) selected=selected @endif>Viet Nam</option> 
                        <option value="Virgin_Islands_British" @if(Auth::user()->profile->country == 'Virgin_Islands_British' ) selected=selected @endif>Virgin Islands, British</option> 
                        <option value="Virgin_Islands_US" @if(Auth::user()->profile->country == 'Virgin_Islands_US ' ) selected=selected @endif>Virgin Islands, U.S.</option> 
                        <option value="Wallis_and_Futuna" @if(Auth::user()->profile->country == 'Wallis_and_Futuna' ) selected=selected @endif>Wallis and Futuna</option> 
                        <option value="Western_Sahara" @if(Auth::user()->profile->country == 'Western_Sahara' ) selected=selected @endif>Western Sahara</option> 
                        <option value="Yemen" @if(Auth::user()->profile->country == 'Yemen' ) selected=selected @endif>Yemen</option> 
                        <option value="Zambia" @if(Auth::user()->profile->country == 'Zambia' ) selected=selected @endif>Zambia</option> 
                        <option value="Zimbabwe" @if(Auth::user()->profile->country == 'Zimbabwe' ) selected=selected @endif>Zimbabwe</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">City <span>*</span> </label>
                      <select class="form-control s_form_field" id="city" name="city">
                        <option selected>Select a City</option>
                        <option value="newyork" @if(Auth::user()->profile->city == 'newyork' ) selected=selected @endif>New York</option>
                        <option value="newyorkcity" @if(Auth::user()->profile->city == 'newyorkcity' ) selected=selected @endif>New York City</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="zipcode">Zip Code <span>*</span></label>
                      <input type="number" id="zipcode" value="{{Auth::user()->profile->zip_code}}" class="form-control s_form_field" name="zip_code">
                    </div>
                  </div>
                </div>
               </div>
               <div class="s_sub_end_button">
                 <div class="row">
                   <div class="col-md-3 col-xs-4">
                     <span>*Required Fields</span>
                   </div>
                   <div class="col-md-3 col-md-offset-6 col-xs-offset-4 col-xs-4">
                     <button type="submit" class="btn s_sub_button active">Save</button>
                   </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
@endsection
