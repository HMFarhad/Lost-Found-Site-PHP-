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
            <li id="liSign"><a href="Signup.html">Sign Up</a></li>
			<li id="liSign"><a  href="Signin.php">Sign In</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
			<li><a href="About.php">About</a></li>
			<li><a  href="Home.php">Home</a></li>
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
							   <td align="left" width="20%"><b><span>Product Catagory</b></td>
							   <td align="left" width="20%"><b><span>Product Name</b></td>
							   <td align="left" width="20%"><b><span>Action</b></td>
							 </tr>';
					 while($result = mysqli_fetch_assoc($query)){
						 $catagory=$result['product_catagory'];
						 $name=$result['product_name'];
						 $found_place=$result['found_place'];
						 $division=$result['division'];
						 $district=$result['district'];
						 $Phone=$result['contact'];
						 
						 echo '<table border="1" align="center" width="100%">

							 <tr>
							   <td align="left" width="20%">'.$catagory.'</td>
							   <td align="left" width="20%">'.$name.'</td>
							   <td align="left" width="20%"><a href="Signin.php">View</a></td>
							 </tr>';
					}
					echo ' </table>';
				}else{
					echo "No Item selected";
				}
			}
		?>
    </div>
    <div class="divFooter">
        <div class="divInnerFooter">all copyrights reserved @ null point 2017</div>
    </div>
</body>
</html>