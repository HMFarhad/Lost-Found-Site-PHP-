<html>
<head>
		<style>
		 /*Full-width input fields */
		input {
			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		body {
			background-color: darkgray;
		}

		.container {
			padding-top: 100px;
			padding-left: 20%;
			padding-bottom: 100px;
			margin-left: 20%;
			margin-right: 20%;
			background-color: slategrey;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#btnSubmit{
			 width: 24%;
			 background-color: cadetblue;
			 color: white;
			 font-size: 20px;
			 cursor: pointer;
		}
		.cancel{
			color:red;
		}
		}
		/* The Modal (background) */
		.modal {
			
			position: fixed;  
			z-index: 1;  
			left: 0;
			top: 0;
			width: 100%;  
			height: 100%;  
			background-color: rgb(0,0,0); 
			background-color: rgba(0,0,0,0.4);  
			padding-top: 60px;
		}
		</style>
    <title>Forget Password</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
    <div align="center" class="divHeader">
        <h1 id="h1Title">LOST AND FOUND</h1>
    </div>
    <div class="divNavigationForgetPass">  
    </div>
    <div class="divBody">
		<form method="post">
			<div class="container">
			  <input type="text" placeholder="Enter Email" name="email"><br/>
			  <input type="password" placeholder="Enter New Password" name="new_password"><br />
			  <input type="password" placeholder="Confirm New Password" name="confirm_password"><br />
			  <input type="submit" id="btnSubmit" value="Submit"><a class="cancel" href="Signin.php">Cancel</a>
			</div>
		</form>
		<script>
			function Cancel(){
				
			}
		</script>
    </div>
    <div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
</body>
</html>

<?php
	session_start();
		include("../Service/connect.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$new_password=$_POST['new_password'];
		$confirm_password=$_POST['confirm_password'];
		$email=$_POST['email'];
		if($confirm_password!=$new_password){
			echo "Password not matched!!";
		}else{
			$encrypt_new_pass=md5($new_password);
		}
			
		$email_check=mysqli_query($conn,"select * from registration where email='$email'");
		$count=mysqli_num_rows($email_check);
	
		if($count != 0){
			$query="UPDATE registration SET password='$encrypt_new_pass' WHERE email='$email'";
			if(mysqli_query($conn,$query)){
				echo "Records added successfully.";
				header('Location:../View/Signin.php');
			}
			else{
			echo "<h1>*Records  not added.</h1>";
			}	
		}
		else{
			echo "<h1>*email not exits</h1>";
		}
	}
		
?>