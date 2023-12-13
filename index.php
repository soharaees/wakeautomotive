<?php
session_start();

require('header.php');
head('Wake Automotive');
if(isset($_POST['sub']))
{
	$qry = "insert into contact values('', '".$_POST['cname']."', '".$_POST['cemail']."', '".$_POST['cphone']."','".$_POST['cbrand']."','".$_POST['cquery']."', CURRENT_TIMESTAMP,'', '0');";
	if($conn->query($qry))
	{
		$save = "success";
	}
	else
	{
		$save = "warning";
	}
  
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
  <?php nav()?>

  <header>
    <div class="container-fluid d-flex justify-content-center align-items-center header-image">
      <div class="container d-flex  align-items-center  header-heading">
        <h2 class="text-white" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000"
          data-aos-easing="ease-in-out">All MECHANICAL WORKS ENGINE SPECIALIST <span class="font-red"><br>AUTO
            ELECTRICTIAN EFI ENGINE CAR<br> A/C</span></h2>
      </div>
    </div>
  </header>
  <!-- get direction
  <div class="container">

    <div class="row m-2">
      <div class="col"><a href="/automotive/pages/appointment.php">book appointment</a></div>
      <div class="col"><a href="https://goo.gl/maps/JhsdaRN9CqC8nq948" target="_blank">Get direction</a></div>
    </div>
  </div> -->
  <!--  services -->
  <section>
    <div class="container-fluid text-center border-botm p-5">
      <h1 class="font-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"> WE PROVIDE <br><span
          class="font-red" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">BEST SERVICES</span> </h1>
    </div>
    <div class="container-fluid border-botm services">
      <div class="row p-5">
        <div class="col-md-4 d-flex justify-content-center align-items-center p-2">
          <div class="position-absolute">
            <h1 class="text-white" > WE PROVIDE
              <br><span class="font-red" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">BEST
                SERVICES</span>
            </h1>
          </div>
          <img src="/automotive/images/side.jpg" alt="">
        </div>
        <div class="col-md-8 d-flex justify-content-center align-items-center  p-2">

          <div class="card custom-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="card-body  d-flex justify-content-center align-items-center flex-column">
              <div>
                <img class="card-img-top" src="images/engine-icon.png" alt="services images" width="100px">
              </div>
              <h2 class="card-title text-center text-white" data-aos="zoom-in" data-aos-duration="1000"
                data-aos-delay="100">
                CAR<span class="font-red"> ENGINE</span> <br>SERVICES</h2>
              <div class="card-left  d-flex justify-content-center align-items-center flex-column p-5 my-5">
                <p class="card-text text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">wake
                  automotive provides the experienced cars mechanics for engine repairing and maintenance services <a
                    href="/automotive/pages/services.php" class="font-red text-decoration-none"> Read more...</a></p>
              </div>
            </div>
          </div>

          <!--------------------------->

          <div class="card custom-card " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="card-body  d-flex justify-content-center align-items-center flex-column text-center">
              <div>
                <img class="card-img-top" src="images/engine-icon.png" alt="services images" width="100px">
              </div>
              <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="text-white">CAR<span
                  class="font-red">
                  ELECTRICIAN</span> SERVICES</h2>
              <div class="card-left  d-flex justify-content-center align-items-center flex-column p-5 my-5">
                <p class="card-text text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">wake
                  automotive provides the experienced cars electrician for car repairing and maintenance services <a
                    href="/automotive/pages/services.php" class="font-red text-decoration-none"> Read more...</a></p>
              </div>
            </div>
          </div>

        </div>

      </div>
  </section>
  <!--  tesimonial -->
  <section>
    <div class="container p-5 ">
      <div class="row">
        <div
          class="col-md-4 text-center d-flex justify-content-center align-items-center flex-column border-right position-relative p-5"
          data-aos="zoom-in" data-aos-duration="1000">
          <img src="./images/circle.png" alt="" class="testimonial-image">
          <h1 class="position-absolute font-white"><span class="font-red">WHAT OUR</span><br> CUSTOMER SAY<br> <span
              class="font-red">ABOUT US</span></h1>
        </div>
        <div class="col-md-8 d-flex justify-content-center align-items-center flex-column text-center p-5"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <i class="fa fa-quote-left font-white " style="font-size:3rem" aria-hidden="true"></i>
                <p class="font-white">Satisfactory in terms of services and best part is this ,like other mechanics he will not push for unnecessary expenses. </p>
                <p class="font-red">Syed Hasan Uddin<br>Unit Head of Soneri Bank Limited </p>
              </div>
              <div class="carousel-item ">
                <i class="fa fa-quote-left font-white " style="font-size:3rem" aria-hidden="true"></i>
                <p class="font-white">Excellent service. Honest advice. Really helpfull in time of need. Great customer support as well. Highly recommend to everyone </p>
                <p class="font-red">Khalid Siddiqui <br>COO Tech Exons </p>

              </div>
              <div class="carousel-item ">
                <i class="fa fa-quote-left font-white " style="font-size:3rem" aria-hidden="true"></i>
                <p class="font-white">Excellent service. Honest advice. Really helpfull in time of need. Great customer support as well. Highly recommend to everyone. </p>
                <p class="font-red">Shams Malik<br>Director of Sir Shams Institute</p>
              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- about -->
  <section>
    <div class="container-fluid  border-botm border-tops py-5 ">
      <div class="row d-flex justify-content-center align-items-center  about">
        <div class="col-md-8 p-5 text-align-right">
          <p class="font-white" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">When it come to that
            how to keep car engine hundred percent effient ,Wake automotive is presented .
            wake automotive is delivering car services with two decade ,thousands of customers has been facilitated
            with their desired and required services. </p>
        </div>
        <div class="container col-md-4 border-left p-5">
          <h1 class="font-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"> ABOUT <br> <span
              class="font-red">US </span></h1>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section>
    <div class="container-fluid text-center border-botm p-5">
      <h1 class="font-white text-center"> CONTACT <span class="font-red">US</span></h1>
    </div>
    <div class="container-fluid border-botm p-5 ">

      <div class="row ">

        <div
          class="col-md-6 border-right font-white d-flex justify-content-center align-items-center flex-column font-size-sm p-5"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <form class="row g-2 needs-validation" action="/automotive/index.php" method="POST">
            <div class="col-md-6">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon"><i class="fa fa-user font-white "
                    aria-hidden="true"></i></span>
                <input type="text" class="form-control form-custom font-white" id="cname" name="cname"
                  aria-describedby="inputGroupPrepend" placeholder="name here" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon">
                  <i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="text" class="form-control form-custom" id="cemail" name="cemail"
                  aria-describedby="inputGroupPrepend" placeholder="Email here" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon">
                  <i class="fa fa-phone" aria-hidden="true"></i></span>
                <input type="text" class="form-control form-custom" id="cphone" name="cphone"
                  aria-describedby="inputGroupPrepend" placeholder="phone number here" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon">
                  <i class="fa fa-car" aria-hidden="true"></i></span>
                <input type="text" class="form-control form-custom" id="cbrand" name="cbrand"
                  aria-describedby="inputGroupPrepend" placeholder="Enter Brand" required>
              </div>
            </div>
          <!--
            <div class="col-md-12">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon">
                  <i class="fa fa-image" aria-hidden="true"></i></span>
                <input type="file" class="form-control form-custom" id="cimage" name="cimage"
                  aria-describedby="inputGroupPrepend" required>
              </div>
            </div>-->
            <div class="col-md-12">
              <div class="input-group has-validation">
                <span class="input-group-text side-icon">
                  <i class="fa fa-pencil" aria-hidden="true"></i></span>
                <textarea class="form-control form-custom" id="cquery" name="cquery"
                  aria-describedby="inputGroupPrepend" placeholder="enter your query " required></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn submit-button" type="submit" name="sub">Submit form</button>
            </div>
          </form>
          <div class="col">
            <?php
				if(isset($save) && $save == 'success'){?>
            <div class="alert alert-light alert-dismissible fade show">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Thanks,</strong> we respond you soon
            </div>
            <?php }?>
          </div>
        </div>
        <div class="col-md-6  font-white d-flex justify-content-center align-items-center font-size-sm "
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14473.085080242148!2d67.1040652!3d24.9228271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2b16817473bf108!2sWake%20Automotive!5e0!3m2!1sen!2s!4v1652218740861!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->

  <?php footer()?>

</body>

</html>