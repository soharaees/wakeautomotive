<?php
require('../header.php');
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
				<h1>View Services</h1>
			</div>
			<div class="col-12">
				<table class="table table-responsive table-hover">
					<tbody>
				<?php
				$qry = " SELECT * FROM services WHERE packeageid=".$_GET['myid']."; ";
               
				$data = $conn->query($qry);

				if($row = $data->fetch_assoc())
				{
					
				
					 
						echo"<tr><th >Service</th><td>".$row['sname']."</td></tr>";
					
				
					
					
                }
				/*<button type="button" class="btn btn-dark text-decoration-none text-white"><a href="/automotive/admin/packages/add.php" class=" text-decoration-none text-white">Add New</a></button>*/


				?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>      