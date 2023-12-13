<?php
require('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<body>
  <section>
  <?php
       nav();
       ?>
      <!-- main containt -->
      <div class=" d-flex justify-content-center flex-column" id="right-div">
        <!-- amppointment management -->
        <div class="container">
          <h1 class="text-center text-dark">Appointment Management</h1>
          <div class="row d-flex  justify-content-center header-heading text-center">
            
            <div class="col-md-4 admin mx-1 my-5">
              <h2> Appointment in Que</h2>
              <div>
                <button type="button" class="btn btn-red">
                  <?php
                $acount = "SELECT COUNT(aid) AS Totalappointment FROM appointment where aconfirmation=0";
						$arun = $conn->query($acount);
						$Totalappointment = $arun->fetch_assoc()['Totalappointment'];
						echo $Totalappointment;
            ?>
            </button>

                <button type="button" class="btn btn-red "><a href="/automotive/admin/appointment/viewall.php">View</a></button>
                <button type="button" class="btn btn-red "><a href="/automotive/admin/appointment/add.php">Add new</a></button>
              </div>
            </div>
            <div class="col-md-4 admin mx-1 my-5">
              <h2>Today appointment</h2>
              <div>
                <button type="button" class="btn btn-red">
                <?php
                $tcount = "SELECT COUNT(adate) AS Todaydate FROM appointment WHERE adate=CURRENT_DATE()";
						$trun = $conn->query($tcount);
						$Todayappointment = $trun->fetch_assoc()['Todaydate'];
						echo $Todayappointment;
            ?>
                </button>

                <button type="button" class="btn btn-red "><a href="/automotive/admin/appointment/today.php"><i class="fa fa-eye">&nbsp;</i>View</a></button>
              </div>
            </div>
        </div>
        



          </div>
       
        </div>
      </div>

   


  </section>
  <?php
         footer();
      ?>
</body>

</html>