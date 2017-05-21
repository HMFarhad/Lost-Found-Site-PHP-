<?php
	session_start();
	include("connect.php");

	$query="INSERT INTO message(user_name,user_email,message) VALUES ('$_SESSION[session_userName]','$_SESSION[email]','$_SESSION[message]')";
	if(mysqli_query($conn,$query)){
		echo "Records added successfully.";
		header('Location:../View/UserHome.php');
	}
	else{
		echo "Records  not added.";
	}	
	
?>