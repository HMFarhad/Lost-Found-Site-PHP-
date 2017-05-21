<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
		$user_name=$_POST['userName'];	
		$user_email=$_POST['email'];
		$user_message=$_POST['message'];
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
		if($error == false){
			$_SESSION['session_userName']=$user_name;
			$_SESSION['email']=$user_email;
			$_SESSION['message']=$user_message;
			header('Location:messageSubmit.php');
		}
		else{echo"Registion faill";}


}	 
?>