<?php
session_start();

if(isset($_POST['login']))
{
	require('header.php');
	$qry = "select id,name,password from login where name = '".$_POST['name']."' and password = '".$_POST['password']."';";

	$data = $conn->query($qry);

	if($row = $data->fetch_assoc())
	{
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['password'] = $row['password'];

		header("location:index.php");
	}
	else
	{
		echo "Invalid Inserted Data";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin Login</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- custom css -->
	<link href="../css/style.css" rel="stylesheet">
	<!-- font awsome cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- animation on scroll -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<style>
	.circle{
		height: 150px;
		width: 150px;
		border: 1px solid rgb(64, 61, 61);
		border-radius: 100px;
		margin: auto;
	}
	.input-background{
		background-color: transparent;
		color: rgb(255, 255, 255);
	}
	.input-background:focus{
		background-color: transparent;
		color: rgb(255, 255, 255);
	}
</style>
<body>
	<!----    form   ---->
	<section class="vh-100 ">
		<div class="container py-5 ">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">
                       
							<div class="mb-md-5 mt-md-4 pb-5">

								<p class="text-white-50 mb-5">Please enter your name and password!</p>
								<form method="POST" action="login.php">
								<div class="form-outline mb-4">
									<label class="form-label" for="adminname">Admin name</label>
									<input type="text" id="adminname" name="name" class="form-control form-control-lg input-background" />
								</div>

								<div class="form-outline mb-3">
									<label class="form-label" for="adminpassword">Password</label>
									<input type="password" id="adminpassword" name="password" class="form-control form-control-lg input-background" />
								</div>
								
								<button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>