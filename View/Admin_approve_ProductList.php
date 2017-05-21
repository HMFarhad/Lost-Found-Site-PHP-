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
			<div class="container" align="center">
				<div class="contHeader"></div>
		<?php
			include("../Service/connect.php");
			session_start();
			if($_SERVER['REQUEST_METHOD']=="POST"){
					 $sql = "SELECT * FROM items_info";
					 $query = mysqli_query($conn, $sql);
					 echo '<table border="1" align="center" width="100%">
							 <tr>
							   <td align="left" width="15%"><b><span>Product Catagory</b></td>
							   <td align="left" width="15%"><b><span>Product Name</b></td>
							   <td align="left" width="15%"><b><span>Found Palce</b></td>
							   <td align="left" width="15%"><b><span>Division</b></td>
							   <td align="left" width="15%"><b><span>Contact</b></td>
							   <td align="left" width="10%"><b><span>Action</b></td>
							 </tr>';
					 while($result = mysqli_fetch_assoc($query)){
						 $product_id=$result['id'];
						 $catagory=$result['product_catagory'];
						 $name=$result['product_name'];
						 $found_place=$result['found_place'];
						 $division=$result['division'];
						 $district=$result['district'];
						 $Phone=$result['contact'];
						 
						 echo "<table border='1' align='center' width='100%'>
							 <tr>
							   <td align='left' width='15%'>$catagory</td>
							   <td align='left' width='15%'>$name</td>
							   <td align='left' width='15%'>$found_place</td>
							   <td align='left' width='15%'>$division</td>
							   <td align='left' width='15%'>$Phone</td>
							   
							   <td align='left' width='10%'> <a href='DeleteProduct.php?delete=$result[id]'>Delete</a></td>
							 </tr>";
					}
					echo " </table>";
				}
		?>
			</div>
			<div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
        </div>
    </div>
</body>
</html>