	<html>
	<head>
		<title>Signin</title>
		<link rel="stylesheet" type="text/css" href="css/frame.css">
		<link rel="stylesheet" type="text/css" href="css/signin.css">
		<script src = "login.js"></script>
	</head>
	<body>
		<div align="center" class="divHeader">
			<h1 id="h1Title">LOST AND FOUND</h1>
		</div>
		<div class="divNavigation">
			 <ul class="ulNavBar">
				<li id="liSign"><a href="Signup.html">Sign Up</a></li>
			<li id="liSign"><a  href="Signin.php">Sign In</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
			<li><a href="About.php">About</a></li>
			<li><a  href="Home.php">Home</a></li>
			</ul>   
		</div>
		<div class="divBody">
				<div class="container" align="center">
				<div class="contHeader"></div>
		<form name = "loginForm"  action = "Signin.php" method = "post">
			<div id = "showForm">
				<input type = "text" name = "email" placeholder="Email" value="<?php if(isset($_COOKIE["Email"])) {echo $_COOKIE["Email"];} ?>"/></br>
				<input type = "password" name = "password" placeholder="Password" value = "<?php if(isset($_COOKIE["Password"])){ echo $_COOKIE["Password"];}?>"/></br>
				<input id="checkbox" type = "checkbox" name = "remember" <?php if(isset($_COOKIE["Email"])){ ?> checked <?php } ?> >Remember me <br><br>
				<input type = "submit" id="btnSubmit" name = "Signin" value = "Signin"></br>
				<h4><a  href="Forget_password.php">Forget Password</a></h4>
			</div>
		</form>	
		</div>
        </div>
    <div class="divFooter">
        <label>all copyrights reserved @ null point 2017</label>
    </div>
</body>
</html>

<?php
	session_start();
	include("../Service/connect.php");
		
			if($_SERVER['REQUEST_METHOD']=="POST")
			{
				
				if(!empty($_POST["email"]) && !empty($_POST["password"]))
				{
					$getPass=$_POST["password"];
					$encryptPass=md5($getPass);
					 $sql = "SELECT * FROM registration WHERE email='".$_POST["email"]. "' AND Password= '" ."$encryptPass"."'";
                     $query = mysqli_query($conn, $sql);
					$result = mysqli_fetch_assoc($query);
					//var_dump("$result");
					 if($result)
					 {
						 if(!empty($_POST["remember"]))
						 {
							 setcookie ("Email", $_POST["email"], time() + 200);
							 setcookie ("Password", $_POST["password"], time() + 200);
						 }
						 else
						 {
							 if(isset($_COOKIE["Email"]))
							 {
								 setcookie ("Email", "");
							 }
							 if(isset($_COOKIE["Password"]))
							 {
								 setcookie ("Password", "");
							 }
						 }
						 $_SESSION['email']=$_POST["email"];
						 //$_SESSION['user_type']=$_POST["user_type"];
						 header("Location:UserHome.php");
					 }
					 else
					 {
							echo "<script>alert('Invalid username or password!')</script>";	
					 }
				}
			}
			
		?>