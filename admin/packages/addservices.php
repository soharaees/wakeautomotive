<?php
require('../header.php');
if(isset($_POST['sub']))
{
	$qry = "insert into services values('', '".$_POST['sname']."', '".$_POST['spackage']."');";

	if($conn->query($qry))
	{
		$save = "success";
	/*	echo "<script>window.location.href = 'viewall.php';</script>";*/
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
<?php
       nav();
       ?>
<div class="container p-5">
<form action="addservices.php" method="post">
              <div class="mb-3">
				    <label for="sname" class="form-label">Service name</label>
				    <input type="text" class="form-control" id="sname" placeholder="Enter package name" name="sname">
				  </div>
                  <div class="mb-3">
				  <label for="sname" class="form-label">Select package</label>
				  <select class="form-select form-custom" id="spackage" name="spackage" required>
          <?php
						$qry = "select * from packages where pdeleted=0;";

						$data = $conn->query($qry);

						while($row = $data->fetch_assoc())
						{
				    	 echo '<option class="text-dark" value="'.$row['pid'].'">'.$row['pname'].'</option>';
				    	}
				    	?>
          </select>
		  <button type="submit" name="sub" class="btn btn-dark">Add</button>
				  </div>
</form>
</div>
</body>
 </html>  