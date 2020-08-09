<?php

include('adb.php');
if(isset($_POST['add']))
{
	$rid=$_POST['rid'];
	$depart_time=$_POST['depart_time'];
	$arr_time=$_POST['arr_time'];
	$dist=$_POST['dist'];
	$origin=$_POST['origin'];
	$destination=$_POST['destination'];
	$fare=$_POST['fare'];
	// $bid=$_POST['bid'];

	
	$qry=mysqli_query($con,"INSERT INTO `route`(`rid`, `depart_time`, `arr_time`, `dist`, `origin`, `destination`, `fare`) VALUES ('$rid','$depart_time','$arr_time','$dist','$origin','$destination','$fare')")or die(mysqli_error($con));
	if($qry==true)
		{
			echo "
			<script>
			alert('added');
			window.location='routes.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='addroute.php';
			</script>
			";

			 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>add route</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- 	<li class="nav-item">
<a class="nav-link" href="editbus.php">View employee</a></li> -->


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/s.png);">
					<span class="login100-form-title-1">
						add route details
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="addroute.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="rid is required">
						<span class="label-input100">rid</span>
						<input class="input100" type="text" name="rid" placeholder="Enter route number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="route name is required">
						<span class="label-input100">depart_time</span>
						<input class="input100" type="text" name="depart_time" placeholder="Enter departure time">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="employee address is required">
						<span class="label-input100">arrival time</span>
						<input class="input100" type="text" name="arr_time" placeholder="Enter arrival time">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="age is required">
						<span class="label-input100">distance</span>
						<input class="input100" type="text" name="dist" placeholder="Enter distance">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="origin is required">
						<span class="label-input100">origin</span>
						<input class="input100" type="text" name="origin" placeholder="Enter origin">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="destination  is required">
						<span class="label-input100">destination</span>
						<input class="input100" type="int" name="destination" placeholder="Enter destination">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="designation is required">
						<span class="label-input100">fare</span>
						<input class="input100" type="text" name="fare" placeholder="Enter fare">
						<span class="focus-input100"></span>
					</div>
					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="busid is required">
						<span class="label-input100">bid</span>
						<input class="input100" type="text" name="bid" placeholder="Enter bus id">
						<span class="focus-input100"></span>
					</div>
 -->                    <div class="container-login100-form-btn">
						
						<input class="login100-form-btn" type="submit" name="add" value="Insert" >
							
						</input>	
					</div>
				</form>
				</div>
				</div>
				</div>



</body>
</html>