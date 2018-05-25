<!-- footer section -->
<footer>
   <section class="main_footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <img src="assets/images/triprite_logo.png" class="img-responsive f_responsive">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
               <p class="f_question">You have questions regarding our services? <br>Contact us, we will be happy to help you out!</p>
               <br>
               <p class="f_mail">triprite@gmail.com</p>
               <p class="address">123 Lipsum St.South Concetur, CT 1234 <br>+91 000-000-0000</p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
               <h3 class="list_content">Useful Links</h3>
               <ul class="list_footer">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Hotels</a></li>
                  <li><a href="#">Flights</a></li>
                  <li><a href="#">About Us</a></li>
               </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
               <h3 class="list_content"></h3>
               <ul class="list_footer f_paddingtop">
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">FAQ's</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
               </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
               <h3 class="list_content">Connect With Us</h3>
               <ul class="socail_icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
               </ul>
               <br>
               <br>
               <h3 class="list_content">Languages</h3>
               <div class="btn_display">
                  <a class="btn btn-theme btn-sm btn-min-block f_english" href="#">English</a><a class="btn btn-theme btn-sm btn-min-block f_us" href="#">US</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="clearfix"></div>
   <section class="footer_copyright">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p class="f_copyright">2018 Triprite. All rights reserved.</p>
            </div>
         </div>
      </div>
   </section>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Wow-min-js -->
<script src="assets/js/wow.min.js"></script>
<!-- alertify-js -->
<script src="assets/js/alertify.min.js"></script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- script-js -->
<script src="assets/js/script.js"></script>
<!-- Custom-js -->
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
   var slideIndex = 1;
   showDivs(slideIndex);
   
   function plusDivs(n) {
    showDivs(slideIndex += n);
   }
   
   function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
   }
</script> 
</body>
</html>