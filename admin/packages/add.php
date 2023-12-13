<?php
require('../header.php');
if(isset($_POST['sub']))
{
	$qry = "insert into packages values('', '".$_POST['pname']."', '".$_POST['pprice']."',current_timestamp(),'');";

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
<div class="container">
		<div class="row">
        <div class="col-12 text-center my-3 bg-dark p-3">
				<h1>Insert New Package </h1>
			</div>
			<div class="col">
            <?php
				if(isset($save) && $save == 'success'){?>
            <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Inserted</strong>
            </div>
            <?php }else if(isset($save) && $save == 'warning'){?>
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Warning!</strong> Unable to submit data
            </div>
            <?php } ?>
          </div>
        </div>
			<div class="col-12">
			<form method="POST" action="add.php">
				

				  <div class="mb-3 mt-3">
				    <label for="pname" class="form-label">Package Name:</label>
				    <input type="text" class="form-control" id="pname" placeholder="Enter PacKage Name" name="pname" >
				  </div>
				  <div class="mb-3">
				    <label for="pprice" class="form-label">Package Price</label>
                    <input type="text" class="form-control" id="pprice" placeholder="Enter price" name="pprice" >
				  </div>
				 
				  <button type="submit" name="sub" class="btn btn-dark">Add</button>
				</form>
			</div>
		</div>
	</div>

 </body>
 </html>      