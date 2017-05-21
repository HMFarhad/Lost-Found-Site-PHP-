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
        </div>
        <div class="Details_Body">
			
        </div>
    </div>
    <div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
</body>
</html>