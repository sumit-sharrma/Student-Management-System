<?php

    $con = mysqli_connect('localhost','root','','sms');

    $result = mysqli_query($con,"SELECT * FROM user_info");
    mysqli_close($con);
    
?>

<style>
    <?php include 'file:///C:\wamp\www\Student-Management-System\Css\sms.php'; ?> 
</style>

<!DOCTYPE>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



<script type="text/javascript">
    function Del(id)
    {
         if(confirm("Are you sure you want to delete this row?")==true)
            window.location="delete.php?del="+id;
            return false;
    }
    
    
</script>

</head>


<body>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <?php
               
                while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['ID'];
                        $fname = $row['first-name']. ' ' .$row['last-name'];
                        
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><a href="edit.php?edit=<?php echo $row['ID']?>" name="edit" class="btn btn-default btn-fill col-xs-12 p2btn">EDIT</a></td>
                        <td><input type="submit" <a href="delete.php?del=<?php echo $id?>" onclick="Del(<?php echo $id ?>);" id="Del" value="DELETE" name="delete" class="btn btn-default btn-fill col-xs-12 p2btn"></a></td>
                    </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>
            <a href="main.php" class="col-xs-offset-3 col-xs-6 btn btn-default btn-fill p2btn">ADD MORE</a>    
    </div>
</div> 
    


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</body>
</html>