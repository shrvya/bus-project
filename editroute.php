<!DOCTYPE html>
<html lang="en">
<head>
	<title>Route</title>
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
</head>
<body>
<?php
$id=$_GET['rid'];
include('adb.php');
$qq = mysqli_query($con,"SELECT * FROM `route` WHERE rid='$id' ");
$res =mysqli_fetch_array($qq);
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/s.png);">
					<span class="login100-form-title-1">
						Edit Route details
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="rid is required">
						<span class="label-input100"> rid</span>
						<input class="input100" type="text" name="rid" value="<?php echo $res['rid']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="departure is required">
						<span class="label-input100">departure</span>
						<input class="input100" type="text" name="depart_time" value="<?php echo $res['depart_time']?>" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="bus name is required">
						<span class="label-input100">arrival</span>
						<input class="input100" type="text" name="arr_time" value="<?php echo $res['arr_time']?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="distance is required">
						<span class="label-input100">distance</span>
						<input class="input100" type="text" name="dist" value="<?php echo $res['dist']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="origin is required">
						<span class="label-input100">origin</span>
						<input class="input100" type="text" name="origin" value="<?php echo $res['origin']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">destination </span>
						<input class="input100" type="text" name="destination" value="<?php echo $res['destination']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">fare </span>
						<input class="input100" type="text" name="fare" value="<?php echo $res['fare']?>">
						<span class="focus-input100"></span>
					</div>
                    <!-- 
                    <div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">bid </span>
						<input class="input100" type="text" name="bid" value="<?php echo $res['bid']?>">
						<span class="focus-input100"></span>
					</div> -->
                    
                    <div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit" name="add" >
							update
						</button>
					</div>				</form>
				</div>
				</div>
				</div>




<?php  
	
	include('adb.php');
	$id=$_GET['rid'];
	if(isset($_POST['add']))
	{
		$rid=$_POST['rid'];
		// $name=$_POST['name'];
		$depart_time=$_POST['depart_time'];
		$arr_time=$_POST['arr_time'];
		$dist=$_POST['dist'];
		$origin=$_POST['origin'];
        $destination=$_POST['destination'];
        $fare=$_POST['fare'];

		$qry=mysqli_query($con,"UPDATE `route` SET `rid`='$rid',`depart_time`='$depart_time',`arr_time`='arr_time',`dist`='$dist',`origin`='$origin',`destination`='$destination',`fare`='$fare' WHERE id='$rid'")or die(mysqli_error($con));
		if($qry==true)
		{
			echo "
			<script>
			alert('updated');
			window.location='routes.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='routes.php';
			</script>
			";

			 }
	}
	?>
	