<?php

	
	if(isset($_GET['update']))
	{
		$con = mysqli_connect('localhost','root','','sms');
		$id = $_GET['id'];
		$fname = $_GET['first_name'];
		$lname = $_GET['last_name'];
		$email = $_GET['email'];
		$add = $_GET['add'];
		

		$sql = "UPDATE `user_info` SET `first-name`='$fname',`last-name`='$lname',`email`='$email',`address`='$add' WHERE `ID`=$id";

			if (mysqli_query($con, $sql)) 
			{
			    ?>
			    	
					<script type="text/javascript">
					alert('Data Updated !!!');
					window.location.href='display.php';
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
					alert('error occured while updating data');
					</script>

				<?php
				echo "Error updating record:\n " . mysqli_error($con);
			}?>
		<?php	 
	}
	?>
