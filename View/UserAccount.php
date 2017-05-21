<?php
	session_start();
	include("../Service/connect.php");
	if(!$_SESSION['email']){
		header('Location:Signin.php');
	}
?>
<html>
<head>
    <title>User Account</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/userAccount.css">
</head>
<body>
    <div align="center" class="divHeader">
        <h1 id="h1Title">LOST AND FOUND</h1>
    </div>
    <div class="divNavigation">
         <ul class="ulNavBar">
            <li id="liSign"><a href="SignOut.php">Sign Out</a></li>

			<li><a href="UserContact.php">Contact Us</a></li>
			<li><a href="UserAbout.php">About</a></li>
			<li><a  href="UserHome.php">Home</a></li>
        </ul>   
    </div>
    <div class="divBody">
		<div class="container" align="center">
			<div class="contHeader"></div>
			<?php
				$sql = "SELECT * FROM registration WHERE email='".$_SESSION["email"]."'";
				$query = mysqli_query($conn, $sql);
				//$result = mysqli_fetch_assoc($query);

				while($data = mysqli_fetch_assoc($query)){	
				$name=$data['name'];
				$phone=$data['contactno'];
				$email=$data['email'];
				$user_type=$data['user_type'];
				if($user_type=="admin"){
					echo '<table table border="0" align="center" width="100%">

								 <tr>
								   <td align="left" width="10%"><b><span>Name:</span></b></td>
								   <td align="left" width="30%">'.$name.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Phone:</span></b></td>
								   <td align="left" width="10%">'.$phone.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Email:</span></b></td>
								   <td align="left" width="10%">'.$email.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Type:</span></b></td>
								   <td align="left" width="10%">'.$user_type.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
									<td width="30%"><lable><a href="Admin.php">Go to Admin</lable></td>
								 </tr>
								 <tr>
									<td width="30%"><lable><a href="Change_password.php">Password Change</lable></td>
								 </tr>
								 </tr>';
								 echo ' </table>';
				}else{
					echo '<table table border="0" align="center" width="100%">

								 <tr>
								   <td align="left" width="10%"><b><span>Name:</span></b></td>
								   <td align="left" width="10%">'.$name.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Phone:</span></b></td>
								   <td align="left" width="10%">'.$phone.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Email:</span></b></td>
								   <td align="left" width="10%">'.$email.'</td>
								   <td width="80%"></td>
								 </tr>
								 <tr>
								   <td align="left" width="10%"><b><span>Type:</span></b></td>
								   <td align="left" width="10%">'.$user_type.'</td>
								   
								 </tr>
								 <tr>
									<td width="30%"><lable><a href="Change_password.php">Password Change</lable></td>
								 </tr>
								 </tr>';
				}
				echo ' </table>';
				}
			?>
		</div>
    </div>
    <div class="divFooter">
        all copyrights reserved @ null point 2017
    </div>
</body>
</html>
