<?php
   session_start();

   if(isset($_SESSION['id']))
   {
   
   }
   else
   {
     header('location:/automotive/admin/login.php');
   }
    define('siteurl', $_SERVER['DOCUMENT_ROOT'].'/automotive/');
    require( siteurl.'connect.php');
    echo'<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css -->
    <link href="/automotive/admin/style/style.css" rel="stylesheet">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>';
function nav(){
    echo'
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/automotive/admin/index.php"><img src="/automotive/images/logo.png" alt=""  width="160px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Appointments
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="/automotive/admin/appointment/viewall.php">Total Appointment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/automotive/admin/appointment/today.php">Today Appointment</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/automotive/admin/packages/view-all.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/automotive/admin/contact/contact-view.php">Contact</a>
        </li>
      <form class="d-flex ">
        <div class="mx-5">
          <div class="d-flex">
              <!--  <div class="form-outline">
                  <input type="search" id="form1" class="form-control" placeholder="search" />
               </div>
              
               <button type="button" class="btn btn-dark">
                <i class="fa fa-search"></i>
              </button>-->
             
          </div>
        </div>
        
        <div class="mx-3">
          <div class="d-flex align-items-center">
          <div class="circle"><img src="/automotive/admin/adminimages/'.$_SESSION['id'].'-admin.jpg" height="30px" class="rounded-circle"></div>
         <div class=" mx-3 text-white">'.$_SESSION['name'].'</div>
         </div>
         </div>
        <div class="mx-3"> <a href="/automotive/admin/logout.php"><button type="button" class="btn bg-red text-white">logout</button></a></div>
      </form>
    </div>
  </div>
</nav>';
  
}
function footer(){
    echo'<!-- JavaScript Bundle with Popper -->
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
  <script src="/automotive/admin/js/custom.js"></script>';
  
}
?>