<?php
require('../header.php');
if(isset($_POST['sub']))
{
	$qry = "update appoinment set aname='".$_POST['pname']."',  = '".$_POST['pprice']."', pservice1='".$_POST['pservice1']."' where aid = '".$_POST['aid']."';";
	if($conn->query($qry))
	{
		$save = "success";
		echo "<script>window.location.href='view-all.php';</script>";
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
<div class="container">
		<div class="row">
        <div class="col-12 text-center my-3 bg-dark p-3">
				<h1>Edit  Package </h1>
			</div>
			<div class="col-12">
				<?php
				if(isset($save) && $save == 'success'){?>
				<div class="alert alert-success alert-dismissible fade show">
				  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				  <strong>Edited</strong> Data edited successfully
				</div>
			<?php }else if(isset($save) && $save == 'warning'){?>
				<div class="alert alert-danger alert-dismissible fade show">
				  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				  <strong>Ooh</strong> Unable to submit data
				</div>
			<?php } ?>
			</div>
			<div class="col-12">
				<?php
				$qry = "select * from packages where pid=".$_GET['myid'].";";

				$data = $conn->query($qry);

				if($row = $data->fetch_assoc())
				{ ?>
				<form method="POST" action="edit.php">
					<input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
				  <div class="mb-3 mt-3">
				    <label for="pname" class="form-label">Package Name:</label>
				    <input type="text" class="form-control" id="pname" placeholder="Enter PacKage Name" name="pname" value="<?php echo $row['pname'];?>">
				  </div>
				  <div class="mb-3">
				    <label for="pprice" class="form-label">Package Price</label>
                    <input type="text" class="form-control" id="pprice" placeholder="Enter price" name="pprice" value="<?php echo $row['pprice'];?>">
				  </div>
				  <div class="mb-3">
				    <label for="pservice1" class="form-label">Service1</label>
				    <input type="text" class="form-control" id="pservice1" placeholder="Enter service1" name="pservice1" value="<?php echo $row['pservice1'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice2" class="form-label">Service2</label>
				    <input type="text" class="form-control" id="pservice2" placeholder="Enter service1" name="pservice2" value="<?php echo $row['pservice2'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice3" class="form-label">Service3</label>
				    <input type="text" class="form-control" id="pservice3" placeholder="Enter service3" name="pservice3" value="<?php echo $row['pservice3'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice4" class="form-label">Service4</label>
				    <input type="text" class="form-control" id="pservice4" placeholder="Enter service4" name="pservice4" value="<?php echo $row['pservice4'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice5" class="form-label">Service5</label>
				    <input type="text" class="form-control" id="pservice5" placeholder="Enter service5" name="pservice5" value="<?php echo $row['pservice5'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice6" class="form-label">Service6</label>
				    <input type="text" class="form-control" id="pservice6" placeholder="Enter service6" name="pservice6" value="<?php echo $row['pservice6'];?>">
				  </div>
                  <div class="mb-3">
				    <label for="pservice7" class="form-label">Service7</label>
				    <input type="text" class="form-control" id="pservice7" placeholder="Enter service7" name="pservice7" value="<?php echo $row['pservice7'];?>">
				  </div>
				  <button type="submit" name="sub" class="btn btn-dark">Update</button>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>

 </body>
 </html>      