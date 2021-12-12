<?php
include'connect.php';

if(isset($_GET['deleteid']))
{
	$grno=$_GET['deleteid'];

	$sql="delete from `perdata` where grno=$grno";

	$result = mysqli_query($connect, $sql);

	if($result)
	{
		echo "Deleted Successfully";
	}
	else
	{
		die(mysqli_error($connect));
	}
}
?>