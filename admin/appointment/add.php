<?php
require('../header.php');

if(isset($_POST['sub'])){

$qry="INSERT INTO appointment values('','".$_POST['auser']."','".$_POST['aemail']."','".$_POST['aphone']."','".$_POST['aservices']."','".$_POST['apackages']."','".$_POST['adate']."','".$_POST['atime']."','".$_POST['aselection']."','".$_POST['alocation']."','".$_POST['adescription']."',CURRENT_TIMESTAMP,'0');"; 
if($conn->query($qry)){
  echo "<script>window.location.href='viewall.php';</script>";
}
else{
  echo"not insered";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
       nav();
       ?>
        <div class="col font-white d-flex justify-content-center align-items-center flex-column font-size-sm p-5 m-5"
    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
    <form class="row g-2 needs-validation" method="POST" action="add.php">
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon"><i class="fa fa-user font-white "
              aria-hidden="true"></i></span>
          <input type="text" class="form-control form-custom font-white" id="auser" aria-describedby="inputGroupPrepend"
            placeholder="name here" name="auser" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-envelope" aria-hidden="true"></i></span>
          <input type="text" class="form-control form-custom" id="aemail" name="aemail"
            aria-describedby="inputGroupPrepend" placeholder="Email here" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-phone" aria-hidden="true"></i></span>
          <input type="text" class="form-control form-custom" id="aphone" name="aphone"
            aria-describedby="inputGroupPrepend" placeholder="phone number here" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-car" aria-hidden="true"></i></span>
          <select class=" chosen-select form-select form-custom " id="aservices" data-placeholder="choose services" multiple  name="aservices" required>
          <option value=""></option>
          <option>Engine tuning</option>
    <option>Break services</option>
    <option>Break and overhauling</option>
    <option>Engine and overhauling</option>
    <option>Engine replacement</option>
    <option>Oil nd oil filter changing</option>
    <option>Gear oil changing</option>
    <option>Engine seal repairing</option>
    <option>Water body replacement</option>
    <option>Radiator replacement</option>
    <option>Plug wire changing</option>
    <option>Break pad and shoe replacement</option>
    <option>Hose pipe replacement</option>
    <option>Timing belt replacement</option>
    <option>Air Conditioning</option>
    <option>Heating Repairs</option>
    <option>EFI Diagnostics & Fault Finding</option>
    <option>Automatic gears</option>
    <option>Suspensions</option>
    <option>logbook Servicing</option>
    <option>logbook Servicing</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-car" aria-hidden="true"></i></span>
          <select class="form-select form-custom" id="apackages" name="apackages" required>
          <?php
						$qry = "select * from packages where pdeleted=0;";

						$data = $conn->query($qry);

						while($row = $data->fetch_assoc())
						{
				    	 echo '<option class="text-dark" value="'.$row['pid'].'">'.$row['pname'].'</option>';
				    	}
				    	?>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i></span>
          <input type="date" class="form-control form-custom" id="adate" name="adate"
            aria-describedby="inputGroupPrepend" placeholder="select date" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i></span>
          <input type="time" class="form-control form-custom" id="atime" max="20:00:00" min="09:00:00" name="atime"
            aria-describedby="inputGroupPrepend" placeholder="select time" required>
        </div>
      </div>
  
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="pick car" id="pick-car" onclick="pick()" name="aselection">
        <label class="form-check-label" for="pick-car">
          Pick car from my place
        </label>
      </div>
      <div class="col-md-6" id="uaddress">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i></span>
          <input type="text" class="form-control form-custom" id="alocation" name="alocation"
            aria-describedby="inputGroupPrepend" placeholder="enter your locaton here">
        </div>
      </div>
      <div class="col">
        <div class="input-group has-validation">
          <span class="input-group-text side-icon">
            <i class="fa fa-pencil" aria-hidden="true"></i></span>
          <textarea class="form-control form-custom" id="adescription" name="adescription" aria-describedby="inputGroupPrepend"
            placeholder="enter description " required></textarea>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-dark" type="submit" id="sub" name="sub">Submit form</button>
      </div>
    </form>
  </div>
 
  <?php
         footer();
      ?>
</body>

</html>