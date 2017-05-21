<?php
	session_start();
	include("connect.php");

	$query="INSERT INTO items_info(product_catagory,product_name,found_place,division,district,contact) VALUES ('$_SESSION[Product_catagory_in_session]','$_SESSION[Product_name_in_session]','$_SESSION[Product_Found_Place_in_session]','$_SESSION[Product_Division_in_session]','$_SESSION[Product_District_in_session]','$_SESSION[Found_Contact_in_session]')";
	if(mysqli_query($conn,$query)){
		echo "Records added successfully.";
		header('Location:../View/UserHome.php');
	}
	else{
		echo "Records  not added.";
	}	
	
?>