<?php
	session_start();
	include("connect.php");

	$query="INSERT INTO registration(name,email,contactno,password,gender,user_type)VALUES('$_SESSION[userName]','$_SESSION[email]','$_SESSION[contactno]','$_SESSION[password]','$_SESSION[gender]','$_SESSION[type_of_user]')";
	if(mysqli_query($conn,$query)){
		echo "Records added successfully.";
		header('Location:../View/Signin.php');
	}
	else{
		echo "Records  not added.";
	}	
	
?>