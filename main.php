<style>
	<?php include 'file:///C:\wamp\www\Student-Management-System\Css\sms.php'; ?>
</style>

<?php 

	if (isset($_POST['submit']))
		{
				# code...
			$con = mysqli_connect('localhost','root','','sms');
			

			//@mysqli_select_db("sms") or die("Could not select database");

			//Retrieve Info

			$ID=$_POST['ID'];
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$email=$_POST['email'];
			$add=$_POST['add'];
			$gender=$_POST['gender'];

			//Insert into db

			$test = "INSERT INTO user_info VALUES('$ID','$first_name','$last_name','$email','$add','$gender');";
			$query = mysqli_query($con, $test);

			 if (!$query)
			 {
			 	# code...
			 	echo "Not inserted";
			 }
			 else
			 {
			 	header('Location: display.php');
			 }
		}		
?>


<!DOCTYPE HTML>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta content='width=device-width , initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
	<meta name="viewport" content="width=device-width">

	<title>Student Management System</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>

<body>

	<form action="" method="post">

		<div class="container">
			<div class="well form-well">
				<div class="row">
					<div class="col-xs-6 Col">
						<div class="form-group">
							<input type="text" class="form-control" name="first_name" placeholder="FIRST NAME">
						</div>
					</div>
					<div class="col-xs-6 Col">
						<div class="form-group">
							<input type="text" class="form-control" name="last_name" placeholder="LAST NAME">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xs-12 Col"> 
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="YOUR EMAIL">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-xs-12 Col"> 
						<div class="form-group">
							<input type="text" class="form-control" name="add" placeholder="YOUR ADDRESS">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 text-center">
						<label class="radio-inline Rgrp">
							<input type="radio" name="gender" id="gender" value="m"> Male
						</label>
					</div>
					<div class="col-md-6 text-center">
						<label class="radio-inline Rgrp">
							<input type="radio" name="gender" id="gender" value="f"> Female
						</label>
					</div>
				</div>


				<div class="row">
					<div class="col-xs-offset-4 col-xs-8 Col">
						<button type="submit" name="submit" id="submit" class="col-xs-4 btn btn-default p2btn">SUBMIT</button>
					</div>
				</div>


			</div><!--End of form-2 well-->
		</div><!--End of form2 Cont.-->

	</form>



<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

