<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
		$Product_catagory=$_POST['Catagory'];	
		$Product_name=$_POST['Product_name'];
		$Product_Found_Place=$_POST['Found_Place'];
		$Product_Division=$_POST['Division'];
		$Product_District=$_POST['District'];
		$Found_Contact = @$_POST["Contact"];
		
		$error = true;
		if($Product_catagory!=""){
			if($Product_catagory==="Select Catagory"){
				$error = true;
			}else{
				$error = false;
		}
		}else{
			$error = true;
		}
		if($Product_name!=""){
			$error = false;
		}else{
			$error = true;
		}
		if($Product_Division!=""){
			$error = false;
		}else{
			$error = true;
		}
		if($Product_District!=""){
			$error = false;
		}else{
			$error = true;
		}
		if($Found_Contact!=""){
			$error = false;
		}else{
			$error = true;
		}
		
		if($error == false){
			/*echo $Product_catagory;
			echo $Product_name;
			echo $Product_Division;
			echo $Product_District;
			echo $Found_Contact;*/
			$_SESSION['Product_catagory_in_session']=$Product_catagory;
			$_SESSION['Product_name_in_session']=$Product_name;
			$_SESSION['Product_Found_Place_in_session']=$Product_Found_Place;
			$_SESSION['Product_Division_in_session']=$Product_Division;
			$_SESSION['Product_District_in_session']=$Product_District;
			$_SESSION['Found_Contact_in_session']=$Found_Contact;
			header('Location:Information.php');
		}
		else{
			echo"Registion faill";
		}
}	 
?>