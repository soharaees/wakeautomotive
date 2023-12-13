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
                    
                    </thead>
                    <tbody>
                        <?php
				$qry = "select * from appointment where adate=CURRENT_DATE() and aconfirmation=1  ORDER BY aid DESC; ;";

				$data = $conn->query($qry);

				while($row = $data->fetch_assoc())
				{
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