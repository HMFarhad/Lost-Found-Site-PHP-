<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
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
		<?php
			include("../Service/connect.php");
			session_start();
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$Product_catagory=$_POST['search_key'];
				if($Product_catagory!=""){
					 $sql = "SELECT * FROM items_info WHERE product_catagory='"."$Product_catagory"."'";
					 $query = mysqli_query($conn, $sql);
					 echo '<table border="1" align="center" width="100%">
							 <tr>
							   <td align="left" width="15%"><b><span>Product Catagory</b></td>
							   <td align="left" width="15%"><b><span>Product Name</b></td>
							   <td align="left" width="15%"><b><span>Found Palce</b></td>
							   <td align="left" width="15%"><b><span>District</b></td>
							   <td align="left" width="15%"><b><span>Division</b></td>
							   <td align="left" width="15%"><b><span>Contact</b></td>
							 </tr>';
					 while($result = mysqli_fetch_assoc($query)){
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
							   <td align='left' width='15%'>$district</td>
							   <td align='left' width='15%'>$Phone</td>
							 </tr>";
					}
					echo ' </table>';
					
				}else{
					
				}
			}
		?>
    </div>
    <div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
</body>
</html>