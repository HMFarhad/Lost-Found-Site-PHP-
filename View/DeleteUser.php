<?php
	include("../Service/connect.php");
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="DELETE FROM registration WHERE id='$id'";
		$res=mysqli_query($conn,$sql);
		header('Location:../View/UserList.php');
	}
?>