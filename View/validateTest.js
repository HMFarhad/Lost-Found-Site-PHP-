
                    function NameValidation(){
                        var name = $('#PName').val();
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
			
                    function PhoneValidation()
					{
                        var phoneNo = $('#PPhone').val();;
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
										//alert (phoneNo);
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
					
                    function validate()
					{		
		                var form = document.getElementById("form1");
                        if(NameValidation()==true&&PhoneValidation()==true)
						{
							alert("Registration Successfull");
							$("#myForm").submit();
                        }		
	                }
