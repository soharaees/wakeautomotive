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
				<th></th>
				<th> Name</th>
				<th> Price</th>
				<!--<th> view each</th>
				<th> edit</th>-->
				<th> Delete</th>

			</thead>
			<tbody>
<?php
	$qry = "select * from packages where pdeleted=0;";
	$data = $conn->query($qry);
	while ($row = $data->fetch_assoc()) {?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
    <p>Do you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <?php echo"<a href='delete.php?myid=".$row['pid']."' class='btn btn-dark'>Delete</a>";?>
      </div>
    </div>
  </div>
</div>
	
	
						
						<?php
							echo "<tr>";
							echo "<td>" . $row['pid'] . "</td>";
							echo "<td>" . $row['pname'] . "</td>";
							echo "<td>" . $row['pprice'] . "</td>";
						/*	echo "<td><a href='vieweach.php?myid=" . $row['pid'] . "' class='btn btn-dark'>View each</a></td>";
							echo "<td><a href='edit.php?myid=" . $row['pid'] . "' class='btn btn-dark'>Edit</a></td>";*/
							echo "<td><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'>
							delete
						  </button></td>";
							
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
				<button type="button" class="btn btn-dark text-decoration-none text-white"><a href="/automotive/admin/packages/add.php" class=" text-decoration-none text-white">Add New</a></button>
				<button type="button" class="btn btn-dark text-decoration-none text-white"><a href="/automotive/admin/packages/addservices.php" class=" text-decoration-none text-white">Add services</a></button>
			</div>
		</div>
	</section>
	<script>
		function del() {
			var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
		}
	</script>
	<?php
	footer();
	?>
</body>

</html>