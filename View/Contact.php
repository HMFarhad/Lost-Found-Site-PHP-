<?php
	session_start();
	if(!$_SESSION['email']){
		header('Location:Signin.php');
	}
?>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
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
				<form id="form1" action="../Service/ContactValidation.php" method="post">
					
					<input type="text" id="userName" placeholder="Name" name="userName"/><br/>
					<input type="text" id="email" placeholder="Email" name="email"/><br/>
					<input type = "text" id="message" name = "message" placeholder="message"/></br>
					<input id="btnSubmit" type="button" value="Sent" onclick="validation()"/><br/>
				</form>
                <script>
                    function NameValidation(){
                        var name = document.getElementById("userName").value;
						var nameRE = /^[A-Za-z\s]+$/;
						if(name!="")
						{
                            if(nameRE.test(name))
							{
								//alert(name);
								return true;
							}
							else alert("Only A-Z or a-z should be on Name!!");
                        }
						else
						{
                            alert("User name missing!!");
                            return false;
                        }
                    }

                    function EmailValidation()
					{
                        var userEmail = document.getElementById("email").value;
                        var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
						
						if(userEmail!="")
						{
                            if(emailRE.test(userEmail))
							{
								//alert(userEmail);
								return true;
							}
							else
							{
								alert("Invalid Email Format!!");
								return false;
							}
						}
						else
						{
							alert("Enter your email address");
							return false;
						}
                    }
					function messageValidation(){
                        var user_message = document.getElementById("message").value;
						if(user_message!="")
						{
							return true;
                        }else
						{
							alert("Enter yourmessage ");
							return false;
						}
                    }
                    function validation()
					{		
		                var form = document.getElementById("form1");
                        if(NameValidation()==true&&EmailValidation()==true && messageValidation()==true)
						{
							alert("Thank you");
                            form.submit();
                        }		
	                }
                </script>
            </div>
        </div>
		<div class="divFooter">
        all copyrights reserved @ null point 2017
    </div>
</body>
</html>