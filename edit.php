<style>
	<?php include 'file:///C:\wamp\www\Student-Management-System\Css\sms.php'; ?>
</style>

<?php
	$id = $_GET['edit'];
	$con = mysqli_connect('localhost','root','','sms');
    $result = mysqli_query($con,"SELECT * FROM user_info WHERE ID = $id");
    while($row = mysqli_fetch_assoc($result))
    {
    	$id = $_GET['edit'];
    	$fname = $row['first-name'];
		$lname = $row['last-name'];
		$email = $row['email'];
		$add = $row['address'];
		$gender = $row['gender'];
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
<form action="update.php" method="GET">
	<div class="container">
		
		<div class="well form-well">
			<div class="row">
				<div class="col-xs-6 Col">
					
						<div class="form-group">
							<input type="hidden" class="form-control" value="<?php echo $id ?>" name="id" >
							<input type="text" class="form-control" value="<?php echo $fname ?>" name="first_name" placeholder="FIRST NAME">
							
						</div>
					</div>
					<div class="col-xs-6 Col">
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $lname ?>" name="last_name" placeholder="LAST NAME">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 Col"> 
						<div class="form-group">
							<input type="email" class="form-control" value="<?php echo $email ?>" name="email" placeholder="YOUR EMAIL">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 Col"> 
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $add ?>" name="add" placeholder="YOUR ADDRESS">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<label class="radio-inline Rgrp">
							<input type="radio" name="gender" value="<?php echo $gender ?>"> Male
						</label>
					</div>
					<div class="col-md-6 text-center">
						<label class="radio-inline Rgrp">
							<input type="radio" name="gender" value="<?php echo $gender ?>"> Female
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-offset-4 col-xs-8 Col">
						<input type="submit" id="update" name="update" class="col-xs-4 btn btn-default p2btn"></a> 
					</div>
				</div>
			</form>
		</div><!--End of form-2 well-->
	</div><!--End of form2 Cont.-->
</form>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="file:///C:\wamp\www\Js\alert.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>


