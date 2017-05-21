<?php
	session_start();
	if(!$_SESSION['email']){
		header('Location:Signin.php');
	}
?>
<html>
<head>
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/information.css">
</head>
<body>
    <div align="center" class="divHeader">
        <h1 id="h1Title">LOST AND FOUND</h1>
    </div>
    <div class="divNavigation">
         <ul class="ulNavBar">
            <li><a  href="UserHome.php">Home</a></li>
            <li><a href="UserAbout.php">About</a></li>
            <li><a href="UserContact.php">Contact Us</a></li>
            
            <li id="liSign"><a href="SignOut.php">Sign Out</a></li>
			<li id="liSign"><a  href="UserAccount.php">Account</a></li>
        </ul>   
    </div>
	<div class="divBody">
		<form id="form1" action="../Service/Information_validation.php" method="post"> 
			<div class="container" align="center"> 
			<div class="contHeader"></div>
                <select name="Catagory">
				  <option>Select Catagory</option>
				  <option value="Mobile Phone">Mobile Phone</option><option value="Mobile Phone Accessories">Mobile Phone Accessories</option>
				  <option value="Motorcycle">Motorcycle</option><option value="Bycycle">Bycycle</option>
				  <option value="Watch">Watch</option><option value="Jewellery">Jewellery</option>
				  <option value="Bag">Bag</option><option value="Sports">Sports</option>
				  <option value="Books">Books</option><option value="Calculator">Calculator</option>
				  <option value="Document">Document</option><option value="Others">Others</option>
				  </select>
					<input type="text" placeholder="Product name" id="Product_name" name="Product_name"><br/>
					<input type="text" placeholder="Found Place" id="Found_Place" name="Found_Place"/><br/>
				  
				  <select id="division" name="Division" onchange="ChangeDivision()"> 
					  <option value="None">Select a Division...</option>
					  <option value="Barishal">Barishal</option>
					  <option value="Chittagong">Chittagong</option>
					  <option value="Dhaka">Dhaka</option>
					  <option value="Mymensingh">Mymensingh</option>
					  <option value="Rajshahi">Rajshahi</option>
					  <option value="Rangpur">Rangpur</option>
					  <option value="Sylhet">Sylhet</option> 
				  </select> 
                    <br/>
				  <select id="district" name="District" disabled><option value="">Select a District...</option></select><br/>	
			      <input id="contactNo" type="text" placeholder="Contact" id="Contact" name="Contact"/><br/>
					
			      <input id="btnSubmit" type="button" value="Submit" onclick="validation()"/><br/>
		</form>
		</div> 
    </div>
    <div class="divFooter">
        all copyrights reserved @ null point 2017
    </div>
</body>
</html>

<script>
	        var districtList = {};
			districtList['Barishal'] = ['Barguna','Barisal','Bhola','Jhalokati','Patuakhali','Pirojpur'];
			districtList['Chittagong'] = ['Bandarban','Brahmanbaria','Chandpur','Chittagong','Comilla','Cox\'s Bazar','Feni','Khagrachhari','Lakshmipur','Noakhali','Rangamati'];
			districtList['Dhaka'] = ['Dhaka','Faridpur','Gazipur','Gopalganj','Kishoreganj','Madaripur','Manikganj','Munshiganj','Narayanganj','Narsingdi','Rajbari','Shariatpur','Tangail'];
			districtList['Mymensingh'] = ['Jamalpur','Mymensingh','Netrakona','Sherpur'];
			districtList['Rajshahi'] = ['Bogra','Chapainawabgan','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajganj'];
			districtList['Rangpur'] = ['Dinajpur','Gaibandha','Kurigram','Lalmonirhat','Nilphamari','Panchagarh','Rangpur','Thakurgaon'];
			districtList['Sylhet'] = ['Habiganj','Moulvibazar','Sunamganj','Sylhet'];

	function ChangeDivision() 
	{
		var districtList = {};
		districtList['Barishal'] = ['Barguna','Barisal','Bhola','Jhalokati','Patuakhali','Pirojpur'];
		districtList['Chittagong'] = ['Bandarban','Brahmanbaria','Chandpur','Chittagong','Comilla','Cox\'s Bazar','Feni','Khagrachhari','Lakshmipur','Noakhali','Rangamati'];
		districtList['Dhaka'] = ['Dhaka','Faridpur','Gazipur','Gopalganj','Kishoreganj','Madaripur','Manikganj','Munshiganj','Narayanganj','Narsingdi','Rajbari','Shariatpur','Tangail'];
		districtList['Mymensingh'] = ['Jamalpur','Mymensingh','Netrakona','Sherpur'];
		districtList['Rajshahi'] = ['Bogra','Chapainawabgan','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajganj'];
		districtList['Rangpur'] = ['Dinajpur','Gaibandha','Kurigram','Lalmonirhat','Nilphamari','Panchagarh','Rangpur','Thakurgaon'];
		districtList['Sylhet'] = ['Habiganj','Moulvibazar','Sunamganj','Sylhet'];
		
		var divisionList = document.getElementById("division");
		var districts = document.getElementById("district");
		document.getElementById("district").disabled = false;
		var selDivision = divisionList.options[divisionList.selectedIndex].value;
		while (districts.options.length) {
			districts.remove(0);
		}
		var district = districtList[selDivision];
		if (district) {
			var i;
			for (i = 0; i < district.length; i++) {
				var dis = new Option(district[i], i);
				districts.options.add(dis);
			}
		}
		else document.getElementById("district").disabled = true;
	}
	function PhoneValidation()
					{
                        var phoneNo=document.getElementById("contactNo").value;
						var phoneNoRE = /^\d+$/;
						
                        if((phoneNo.length<12)&&(phoneNo.length>10))
						{
                            if(phoneNoRE.test(phoneNo))
							{
								var tmp1 = phoneNo.charAt(0);
								var tmp2 = phoneNo.charAt(2);
								if(tmp1==0)
								{
									if(tmp2==5||tmp2==6||tmp2==7||tmp2==8||tmp2==9)
									{
										alert (phoneNo);
										return true;
									}
									else
									{
										alert("Phone Operator Do Not Exist !!!");
										return false;
									}		
								}
								else
								{
									alert("Invalid Phone Number!!Must start with 0!");
									return false;
								}	
							}
                        }
						else
						{
                            alert("Invalid Phone Number");
                            return false;
                        }
                    }
	 
	 
	 function validation()
					{		
		                var form = document.getElementById("form1");
                        if(PhoneValidation()==true)
						{
                            alert("Item Added Successfully");
							form.submit();
                        }	
	                }	
</script>