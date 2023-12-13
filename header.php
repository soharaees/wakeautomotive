<?php
define('siteurl', $_SERVER['DOCUMENT_ROOT'].'/automotive/');
 require( siteurl.'connect.php');
function head($title){
 echo'<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="" content="">
 <meta name="keywords" content="">
 <title>Wake Automotive</title>
 <link rel="icon" type="image/x-icon" href="/automotive/images/fav.jpg">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- custom css -->
 <link href="/automotive/css/style.css" rel="stylesheet">
 <!-- font awsome cdn -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- animation on scroll -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>';
}
function nav(){
  echo'<div class="container-fluid upper-header">
  <div class="row">
    <div class="col-md-3 d-flex justify-content-center align-items-center border-right" data-aos="fade-down"
      data-aos-duration="1000" data-aos-delay="100">
      Mon-Sat :10am-10pm Sun : closed
    </div>
    <div class="col-md-6  d-flex justify-content-center align-items-center border-right text-center" data-aos="fade-down"
      data-aos-duration="1000" data-aos-delay="100"><a href="https://goo.gl/maps/JhsdaRN9CqC8nq948" target="_blank" class="text-decoration-none text-white"> Shop No A10,Block 11, Gulshan-E-Iqbal, University Road</a>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center" data-aos="fade-down"
      data-aos-duration="1000" data-aos-delay="100">
      <a href="tel:0303270978" class="text-decoration-none text-white">0303 2708978</a>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid ">
    <a class="navbar-brand logo" href="#">
      <img src="/automotive/images/logo.png" alt="logo image" width="160px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
        <a class="nav-link active" aria-current="page" href="/automotive/index.php" style="color:white">HOME</a>
        <a class="nav-link" href="/automotive/pages/services.php" style="color:white">SERVICES</a>
        <a class="nav-link" href="/automotive/pages/packages.php" style="color:white">PACKAGES</a>
        <a class="nav-link" href="/automotive/pages/appointment.php" style="color:white">APPOINTMENT</a>
        <a class="nav-link"><button id="theme"><i class="fa fa-moon-o" aria-hidden="true" style="font-size:1rem"></i>Dark mode</button></a>
      </div>
    </div>
  </div>
</nav>
<!--- icons -->
<div class="icon-bar">
  <a href="#" class="fixed-icons" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100"><i
      class="fa fa-facebook"></i></a>
  <a href="mailto:wakeautomotive@gmail.com" class="fixed-icons" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"><i
      class="fa fa-envelope"></i></a>
  <a href="#" c class="fixed-icons" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300"><i
      class="fa fa-whatsapp"></i></a>
  <a href="tel:03032708978" class="fixed-icons" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400"><i
      class="fa fa-phone"></i></a>

</div>
';
}
function footer(){
  echo'
  <footer>
  <div class="container p-5">
      <div class="row">
          <div class="col-md-4 mb-md-0 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <h2 class="footer-heading">Timing</h2>
              <ul class="list-unstyled">
                  <li class="py-1">Monday: 10:00AM-10:00PM</li>
                  <li class="py-1">Tuesday: 10:00AM-10:00PM</li>
                  <li class="py-1">Wednesday: 10:00AM-10:00PM</li>
                  <li class="py-1">Trusday: 10:00AM-10:00PM</li>
                  <li class="py-1">Friday: 10:00AM-10:00PM</li>
                  <li class="py-1">Saturday: 10:00AM-10:00PM</li>
                  <li class="py-1">Sunday: Closed</li>
              </ul>
          </div>
          <div class="col-md-4 mb-md-0 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <h2 class="footer-heading">Quick links</h2>
              <ul class="list-unstyled">
                  <li><a href="/automotive/pages/services.php"  class="py-1 footer-links">Services</a></li>
                  <li><a href="/automotive/pages/appointment.php" class="py-1 footer-links">Appointment</a></li>
                  <li><a href="/automotive/pages/packages.php" class="py-1 footer-links">Packages</a></li>

              </ul>
          </div>
          <div class="col-md-4 mb-md-0 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <h2 class="footer-heading">Contact Info</h2>
              <ul class="list-unstyled">
                  <li class="py-1"><b>Address</b></li>
                  <li class="py-1"> <a href="https://goo.gl/maps/JhsdaRN9CqC8nq948" target="_blank" class="text-decoration-none text-white"> Shop No A10,Block 11, Gulshan-E-Iqbal, University Road</a></li>
                  <li class="py-1"><b>Contact No</b></li>
                  <li class="py-1"><a href="tel:0303270978" class="footer-links">+92 303 2708978</a></li>
                  <li class="py-1"><b>Email</b></li>
                  <li class="py-1"><a href="mailto:wakeutomotive@mail.com" class="py-1 footer-links">wakeautomotive@gmail.com<a></li>
              </ul>
          </div>
      </div>
  </div>
<div class="container-fluid footer-icons-bar" >
<a href="#" class="fixed-icons" ><i class="fa fa-facebook"></i></a> 
<a href="#" class="fixed-icons"><i class="fa fa-instagram"></i></a> 
<a href="#"  class="fixed-icons" ><i class="fa fa-whatsapp"></i></a>
<a href="#"  class="fixed-icons"><i class="fa fa-youtube"></i></a> 
</div>
  <div class="container-fluid border-tops py-1 text-center">
      <p class="copyright">
          Copyright &copy;20
          <?php echo date("y")?> All rights reserved
      </p>
  </div>
</footer>
<!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!--  animation on scroll -->
  <script>
    AOS.init();
  </script>
  <!--      ajax ---->
  <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script>
  $(".chosen-select").chosen({
no_results_text: "Oops, nothing found!"
})
</script>
<script src="/automotive/js/custom.js"></script>
  ';
}
?>



  