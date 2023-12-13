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
        <div class="container-fluid">
        <button type="button" class="btn btn-dark text-decoration-none text-white"><a href="/automotive/admin/appointment/add.php" class=" text-decoration-none text-white">Add New</a></button>
            <div class="col-12 m-1">
                <table class="table table-responsive table-bordered">
                    <thead class="bg-dark text-white">
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer number</th>
                        <th>Services</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Type</th>
                        <th>loaction</th>
                        <th>Description</th>
                        <th>Current Time</th>
                        <th>Edit</th>
                        <th>Confirmtion</th>
                    </thead>
                    <tbody>
                        <?php
				$qry = "select * from appointment where aconfirmation=0 ORDER BY aid DESC; ;";

				$data = $conn->query($qry);

				while($row = $data->fetch_assoc())
				{?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
    <p>Do you want to confirm?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <?php echo"<a href='confirmed.php?myid=".$row['aid']."' class='btn btn-dark'>Confirmed</a>";?>
      </div>
    </div>
  </div>
</div>
                <?php
					echo "<tr>";
					echo "<td>".$row['aid']."</td>";
					echo "<td>".$row['auser']."</td>";
					echo "<td><a href='mailto:".$row['aemail']."'>".$row['aemail']."</td>";
					echo "<td><a href='tel:" .$row['anumber']."'>".$row['anumber']."</a></td>";
					echo "<td>".$row['aservices']."</td>";
					echo "<td>".$row['apackages']."</td>";
					echo "<td>".$row['adate']."</td>";
                    echo "<td>".$row['atime']."</td>";
                    echo "<td>".$row['atype']."</td>";
                    echo "<td>".$row['alocation']."</td>";
                    echo "<td>".$row['adescription']."</td>";
                    echo "<td>".$row['acurrenttime']."</td>";
                    echo "<td><a href='edit.php?myid=".$row['aid']."' class='btn btn-dark'>edit</a></td>";
					echo "<td><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    confirm
                  </button></td>";
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