<!-- <?php $base_url = 'http://site.startupbug.net:6888/abyat/frontend/'; ?> -->
<?php $base_url = 'http://localhost/abyat/'; ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Abyat</title>
      <!-- Bootstrap -->
      <link href="<?php echo $base_url;?>assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- FontAwesome -->
      <link href="<?php echo $base_url;?>assets/css/font-awesome.min.css" rel="stylesheet">
      <!-- Animate -->
      <link href="<?php echo $base_url;?>assets/css/animate.css" rel="stylesheet">
      <!-- Animation CSS -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>assets/css/default.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>assets/css/component.css" />
      <!-- Date Picker -->
      <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>assets/css/daterangepicker.css" />
      <!-- style.css -->
      <link href="<?php echo $base_url;?>assets/css/style.css" rel="stylesheet">
      <link href="<?php echo $base_url;?>assets/css/s_css.css" rel="stylesheet">
      <!-- Responsive -->
      <link href="<?php echo $base_url;?>assets/css/responsive.css" rel="stylesheet">

      <link href="<?php echo $base_url;?>assets/css/dashboard_style.css" rel="stylesheet">

   </head>

   <body>
     <header dir="">
       <section class="main_top">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="top-header">
                 <ul class="top-header-nav">
                   <li><i class="fa fa-phone f_phone" aria-hidden="true"></i>: +1 2535 56854 </li>
                   <li><i class="fa fa-envelope f_phone" aria-hidden="true"></i>: hello@domain.com</li>
                   <li><i class="fa fa-location-arrow f_phone"></i></i>: Birmingham, England, B3 2EW</li>
                   <!--<li><i class="fa fa-user f_phone"></i><a href="login.php">: Login</a>/<a href="signup_faq.php">Register</a></li>-->
                 </ul>

                 <ul class="right_top">
                   <i class="fa fa-language f_language" aria-hidden="true"></i>
                   <li class="dropdown">

                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       : ENG <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu f_dropmenu f_size">
                       <li><a href="#">Arabic</a></li>

                     </ul>
                     <div id="google_translate_element"></div>
                   </li>
                   <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-money fa_icon"></i>: SAR
                       <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu f_size">
                       <li><a href="#">USD</a></li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </section>
       <div class="container">
         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="row">
               <nav class="navbar navbar-default">
                 <div class="container">
                   <!-- Brand and toggle get grouped for better mobile display -->
                   <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="index.php">
                       <img src="<?php echo $base_url;?>assets/images/logo-abyat-english.jpg" class="img-responsive logo_f">
                     </a>
                   </div>
                   <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="navbar-collapse collapse" id="navbar-collapse-1" aria-expanded="false" style="height: 1px;">
                     <ul class="nav navbar-nav navbar-right f_nav">
                       <li><a href="index.php">HOME</a></li>
                       <li><a href="hotels.php">HOTELS</a></li>
                       <li><a href="flight_search.php">FLIGHTS</a></li>
                       <li><a href="aboutus.php">ABOUT US</a></li>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="contact.php">CONTACT US</a></li>
                       <li><a href="login.php" class="btn btn-default f_signin">SIGN IN</a></li>
                     </ul>
                   </div>
                   <!-- /.navbar-collapse -->
                 </div>
                 <!-- /.container -->
               </nav>
             </div>
           </div>
         </div>
       </div>
     </header>
