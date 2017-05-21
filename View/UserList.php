<?php
	session_start();
	include("../Service/connect.php");
	if(!$_SESSION['email']){
		header('Location:Signin.php');
	}
?>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/Admin.css">
</head>
<body>
    <div align="center" class="divHeader">
        <h1 id="h1Title">LOST AND FOUND</h1>
    </div>
    <div class="divNavigation">
         <ul class="ulNavBar">
          <li id="liSign"><a href="SignOut.php">Sign Out</a></li>
			<li id="liSign"><a  href="UserAccount.php">Account</a></li>
			<li><a href="UserContact.php">Contact Us</a></li>
			<li><a href="UserAbout.php">About</a></li>
			<li><a  href="UserHome.php">Home</a></li>
        </ul>   
    </div>
    <div class="divBody">
		<div class="Options">
			<form method="post" action="Admin_approve_ProductList.php"><input id="btnOptions" type="submit" value="Post Request"></br></form>
			<form method="post" action="UserList.php"><input id="btnOptions" type="submit" value="User List"></form>
			<form method="post" action="messageList.php"><input id="btnOptions" type="submit" value="Message"></form>
			</form>
        </div>
        <div class="Details_Body">
			<div class="container" align="center">
				<div class="contHeader"></div>
			<?php
			include("../Service/connect.php");
			if($_SERVER['REQUEST_METHOD']=="POST"){
				 $sql = "SELECT * FROM registration WHERE user_type='user'";
				 $query = mysqli_query($conn, $sql);
				 echo"<table border='1' align='center' width='100%'>
					 <tr> 
						 <td align='left' width='20%'><b><span>Name</b></td>
						 <td align='left' width='20%'><b><span>Email</b></td>
						 <td align='left' width='20%'><b><span>Contact</b></td>
						 <td align='left' width='20%'><b><span>Gebder</b></td>
						 <td align='left' width='10%'><b><span>Type</b></td>
						 <td align='left' width='10%'><b><span>Action</b></td>
						 </tr>
				 </table>";
				 
				 while($result = mysqli_fetch_assoc($query)){
					 $user_id=$result['id'];
					 $user_name=$result['name'];
					 $user_email=$result['email'];
					 $user_contactno=$result['contactno'];
					 $user_gender=$result['gender'];
					 $user_type=$result['user_type'];
					 
					 
					 echo "<table border='1' align='center' width='100%'>

						 <tr>
						   <td align='left' width='20%'>$user_name</td>
						   <td align='left' width='20%'>$user_email</td>
						   <td align='left' width='20%'>$user_contactno</td>
						   <td align='left' width='20%'>$user_gender</td>
						   <td align='left' width='10%'>$user_type</td>
						  <td align='left' width='10%'> <a href='DeleteUser.php?delete=$result[id]'>Delete</a></td>
						 </tr>";
					}
					echo " </table>";
				}
		?>
			</div>
        </div>
		<div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
    </div>
</body>
</html>