<?php
require("../header.php");
head("packages");
?>
<!DOCTYPE html>
<html lang="en">

<body>
  <?php nav() ?>
  <div class="container-fluid  d-flex justify-content-center align-items-center flex-column appointment p-5">
    <h2>OUR PACKAGES</h2>
  </div>

  <section>
    <div class="container my-3">
      <div class="row">


        <?php
        $qry = "SELECT p.pid, p.pname,p.pprice,s.sname
      FROM packages as p
      Right JOIN services as s 
      ON  p.pid = s.packeageid;";
        $data = $conn->query($qry);
$lastPkg = 0;

        while ($row = $data->fetch_assoc()) {?>
        <?php
          if($row['pid']==$lastPkg)
          {  
            echo'<li>'. $row['sname'].'</li>';
          }
          else{
            $lastPkg = $row['pid'];
            echo ' <div class="col-md-4  d-flex justify-content-center align-items-center flex-column " data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
     data-aos-easing="ease-in-out">
          <ul class="gradient-list " >
    <li style="background-image: linear-gradient(#232526, #414345) " 
    class="d-flex justify-content-center align-items-center flex-column"><h1 class=" text-center text-white">' . $row["pname"] . ' </h1>
    <h3 class="text-center text-white">Rs.' . $row['pprice'] . '</h3>
    <button type="button" class="btn btn-dark m-auto"><a href="/automotive/pages/appointment.php" class=" text-decoration-none text-white">ORDER NOW</a></button></li>
   
   
  </ul>
          </div>
';
          }
          
        }
        ?>

      </div>
    </div>
  </section>


  <?php footer() ?>

</body>

</html>