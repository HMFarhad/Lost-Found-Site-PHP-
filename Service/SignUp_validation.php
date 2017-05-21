<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
		$user_name=$_POST['userName'];	
		$user_email=$_POST['email'];
		$user_contactNo=$_POST['contactNo'];
		$password=$_POST['password'];
		$confirm_password=$_POST['confirm_password'];
		$gender = $_POST["gender"];
		$type_of_user="user";
		$words=explode("@",$user_email);
		$letter= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		
		$error = true;

		if($user_name==''){
			echo"Entter your name please!!<br/>";
			$error = true;
		}else if(strpos($letter,$user_name[0])==false){
			echo "Name must start with Letter<br/>";
			$error = true;
		}else if(str_word_count($user_name)<2){
			echo "Name must have two words<br/>";
			$error = true;
		}else{
			$error = false;
			//echo $user_name."<br/>";
		}
		
		if($user_email==''){
			echo "Enter your email address!<br/>";
			$error = true;
		}else{
			if(count($words)<2){
				echo "Invalide formate!!<br/>";
				$error = true;
			}else{
				if($words[1]==''){
					echo "Domain name missing!!";
					$error = true;
				}else{
					$word=explode(".",$words[1]);
					if(count($word)<2){
						echo "wrong Pattern!!<br/>";
						$error = true;
					}else{
						$error = false;
						//echo $user_email."<br/>";
					}
				}
			}
		}
		
		if(strlen($user_contactNo)<11 && strlen($user_contactNo)>11){
			echo "Invalid contact number";
		}
		
		if( strlen($password) < 5 ) {
		echo "Password too short! <br/>";
			$error = true;
		}else{
			if( strlen($password) > 15 ) {
				echo  "Password too long! <br/>";
				$error = true;
			}else{
				if( strlen($password) < 5) {
				echo "Password too short! <br/>";
				$error = true;
				}else{
					if( !preg_match("#[0-9]+#", $password) ) {
						echo"Password must include at least one number! <br/>";
						$error = true;
					}else{
						if( !preg_match("#[a-z]+#", $password) ) {
						echo"Password must include at least one letter!<br/>";
						$error = true;
						}else{
							if( !preg_match("#[A-Z]+#", $password) ) {
								echo "Password must include at least one CAPS! <br/>";
								$error = true;
							}else{
								if( !preg_match("/[^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[‌​\d])\S*$]/", $password) ) {
									echo "Password must include at least one symbol!<br/> ";
									$error = true;
								}else {
									if(preg_match("/[~`!@#$%^&*()_-+=\[\]{}\|\\:;\"\'<,>.]/", $password)){
										echo "Password must include at least one special character!<br/> ";
										$error = true;
									}else{
									$error = false;
										//echo $password."<br/>";
										//echo "Your password is strong.<br/>";
										}
								}
							}
						}
					}
				}
			}
		}
		
		if($confirm_password!=$password){
			echo "Password don't match!!";
			$error = true;
		}else{
				if($confirm_password==''){
					echo "Password don't match!!";
					$error = true;
				}else{
					if($password==''){
						echo "Password don't match!!";
						$error = true;
					}else{
						$error = false;
						//$password=md5($password);
						//echo "Your password is strong.<br/>";
					}
				}
			 }
			 
		 if($gender==''){
			echo "You have to Seclect atleast one option !";
			$error = true;
		}
		if($error == false){
			$_SESSION['userName']=$user_name;
			$_SESSION['email']=$user_email;
			$_SESSION['contactno']=$user_contactNo;
			$_SESSION['password']=md5($password);
			$_SESSION['gender']=$gender;
			$_SESSION['type_of_user']=$type_of_user;
			header('Location:registration.php');
		}
		else{echo"Registion faill";}


}	 
?>