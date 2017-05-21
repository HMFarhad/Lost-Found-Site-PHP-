<script>
    function f() {        
        var txtSearchKey = document.getElementsByName("search_key")[0];

        //alert(txtSearchKey.value);

        var req = new XMLHttpRequest();
        /*0*/
        req.open("GET", "fetch.php?search_key=" + txtSearchKey.value, true);
        /*1*/
        req.onreadystatechange = function () {
            if (req.readyState == 4) {
                var span = document.getElementById("show");
                span.innerHTML = req.responseText;
            }
        }
        req.send();
        /*2*/
        /*3*/
        /*4*/        
    }   
</script>

<?php
	session_start();
	if(!$_SESSION['email']){
		header('Location:Signin.php');
	}
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
    <link rel="stylesheet" type="text/css" href="css/Home.css">
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
        <div class="Lost">
            <p><h1>Lost Something?  Search Here...</h1></p>
				<form method="post" action="UserProductList.php">
					<input type="text" name="search_key" onkeyup="f()" />
					<!--<input type="button" value="Search" onclick="f()" />-->
					<span id="show"></span>
					</br>
					<input id="btnSubmit" type="submit" value="Search"/><br/>
				</form>
        </div>
        <div class="Found">
			<form>
				<p><h2>Found a Lost Item which is Not Yours?<br/>To Return the Item to the owner, Please fill up a form here...</h2>
				<!-- <input type = "submit" name = "submit" value = "Submit Item Info Here"/>!-->
				<a href="InfoForm.php" ><h1>Submit Item Info Here</h1></a>
			</form>
        </div>
    </div>
    <div class="divFooter">
        all copyrights reserved @ null point 2017
    </div>
</body>
</html>