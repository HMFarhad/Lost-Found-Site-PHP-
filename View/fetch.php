<?php
	include("../Service/connect.php");
	$query="select * from items_info where product_catagory like '%$_REQUEST[search_key]%'";
	$data=mysqli_query($conn,$query);
	while($result=mysqli_fetch_assoc($data)){
		echo "<br/>"."$result[product_catagory]";
	}
?>