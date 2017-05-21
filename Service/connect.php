<?php
	$server_name = "127.0.0.1:3306";
$name = "root";
$password="";
$database_name="lost&found";

$conn = mysqli_connect($server_name,$name,$password,$database_name);
if(!$conn){
	die("Connection failed: ");
}else
   {
	//echo "Connection successull<br/>";
	}
?>