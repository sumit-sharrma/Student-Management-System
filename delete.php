<?php

	$id = $_GET['del'];
	
	if(isset($_GET['del']))
	{
		$con = mysqli_connect('localhost','root','','sms');
		$id = $_GET['del'];
		
		
		$sql = "DELETE FROM `user_info` WHERE `ID`=$id";
		if (mysqli_query($con, $sql)) 
			{
			    ?>
			    	
					<script type="text/javascript">
					alert('Record Deleted');
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
