<?php
require('../header.php');
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<?php
       nav();
       ?>
	<section>

		<!-- main containt -->
		<div class="container">
			<div class="col-12 m-1">
				<table class="table table-responsive table-bordered">
					<thead class="bg-dark text-white">
						<th>Customer Id</th>
						<th>Customer Name</th>
						<th>Customer Email</th>
						<th>Customer number</th>
						<th>Customer brand</th>
						<th>Customer query</th>
						<th>Contact time</th>
						<th>responded</th>
					</thead>
					<tbody>
						<?php
				$qry = "select * from contact where contactresponse='' ORDER BY cid DESC;";

				$data = $conn->query($qry);

				while($row = $data->fetch_assoc())
				{?>
				<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
    <p>Do you want to confirm response?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <?php echo"<a href='responded.php?myid=".$row['cid']."' class='btn btn-dark'>Yes</a>";?>
      </div>
    </div>
  </div>
</div>
				<?php
					echo "<tr>";
					echo "<td>".$row['cid']."</td>";
					echo "<td>".$row['cname']."</td>";
					echo "<td><a href='mailto:".$row['cemail']."'>".$row['cemail']."</td>";
					echo "<td><a href='tel:" .$row['cphone']."'>".$row['cphone']."</a></td>";
					echo "<td>".$row['cbrand']."</td>";
					echo "<td>".$row['cquery']."</td>";
					echo "<td>".$row['caddedon']."</td>";

					echo "<td><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'>
					Responded
				  </button></td>";
					echo "</tr>";
				}
				?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="container">
		<div class="col-12 text-center my-3 bg-dark p-3">
				<h1>Responded</h1>
			</div>
			<div class="col-12 m-1">
				<table class="table table-responsive table-bordered">
					<thead class="bg-dark text-white">
						<th>Customer Id</th>
						<th>Customer Name</th>
						<th>Customer Email</th>
						<th>Customer number</th>
						<th>Customer brand</th>
						<th>Customer query</th>
						<th>Contact time</th>
					</thead>
					<tbody>
						<?php
				$res= "select * from contact where contactresponse='responded' ORDER BY cid DESC;";

				$data = $conn->query($res);

				while($row = $data->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['cid']."</td>";
					echo "<td>".$row['cname']."</td>";
					echo "<td><a href='mailto:".$row['cemail']."'>".$row['cemail']."</td>";
					echo "<td><a href='tel:" .$row['cphone']."'>".$row['cphone']."</a></td>";
					echo "<td>".$row['cbrand']."</td>";
					echo "<td>".$row['cquery']."</td>";
					echo "<td>".$row['caddedon']."</td>";
					echo "</tr>";
				}
				?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<?php
         footer();
      ?>
</body>

</html>