
<?php
            
     $fname="";
     $lname="";
     $err_name="";

     $email="";
     $err_email=""; 

	 $gender="";
     $err_gender="";
	 
	 
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";

     $add="";
     $err_add="";

     $message="";
     $err_message="";

     $hasError = false;
	 
	 $Address = array("Dhaka","Chittagong","Rajshahi","Khulna");

      function Service($service){
				global $services;
				foreach($services as $s){
					if($s == $service)
					{
					 return true;
				    }
				}
				return false;
			}

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
		 
		 //First Name  Validation
				
                if (empty($_POST["fname"]) && empty($_POST["lname"]))   
        {
            $err_name="First Name & Last Name Required";
            $hasError = true;
        }

         elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]) && !is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                $fname=$_POST["fname"];
                $lname=$_POST["lname"];
               }


           elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]))
               {
                   $err_name="Last Name Required";
                    $hasError = true; 
					$fname=$_POST["fname"];
               }

             elseif(!is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                   $err_name="First Name Required";
                    $hasError = true; 
					 $lname=$_POST["lname"];
               }
			   elseif(is_numeric($_POST["fname"]) && is_numeric($_POST["lname"]))
               {
                   $err_name="Number is not allowed";
                    $hasError = true; 
               }

               elseif(is_numeric($_POST["fname"]) || is_numeric($_POST["lname"]))
               {
                   if(is_numeric($_POST["fname"]))
                   {
                    $err_name="Numeric Number is Not allowed ";  
                    $hasError = true; 
                   }
                    elseif(is_numeric($_POST["lname"]))
                    {
                    $err_name="Numeric Number is Not allowed ";
                    $hasError = true;
                     }
                  
               }
		      
			  
			  //Email  Validation

                 
            if(empty($_POST["email"])){
                  
                $err_email="Email Required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
                   $hasError = true;
                }
				
				
				
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			
			  
			  //Password Validation
			  
			  
     	
      if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

		
       //Confirm password validation
	   
	   
		if(empty($_POST["confirm_password"]))    
     	{
			$err_cpass="Confirm Password Required";
			$hasError = true;
		}

		elseif ($_POST["password"]!=$_POST["confirm_password"])  
	    {
			$err_cpass="Password does not Matched";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
			$cpass=$_POST["confirm_password"];
		}

         //Check Box Validation

         if(!isset($_POST["services"]))   
		{
			$err_services="   ";
			$hasError = true;
		}
		else
		{
			$services = $_POST["services"];
		}
		
		
        //Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
				else{
				$add=$_POST["Address"]; 
				
            }  

     }


?>



<html>
  <head>
	<title>Tutor SignUp</title>
  </head>
  <body>
                 <form action="" method="post">
                	  <table align="center">
                             <tr>
                             	 <td  align="center">
								   <b>
								     <h2>SignUp</h2>
								   </b>
								 </td>
                             </tr>
                	  	     <tr>
                	  	     	 <td>
								     <b>Name</b>
							     </td>
                	  	     </tr>
							 <tr>
      	    	   	   <td>
                           <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" size="15" >-
                           <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" size="18">
                       </td>
                       <td>
                            <span>
                                <?php echo $err_name;?>   
                            </span>
                        </td>
      	    	   </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     </tr>
							 <tr>
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
                                 <td>
                                    <span>
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							  <tr>
                             <td>
							     <b>Gender:</b>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                            </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                           <tr>
                            <td>
							<b>Address:</b>
      	    	   	   	       <select name="Address">
      	    	   	   	   	       <option selected disabled>Address</option>
								  <?php
								  foreach($Address as $a)
								  {
								  	if($add == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
						    
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
                            </td>  
                            </tr>
							
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
                	  	     </tr>
							 <tr>
							 <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	         </td>

      	    	   	          <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	          </td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	     </tr>
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	         </td>

      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>

							 
							
							 <tr>
							   <td>
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                        </td>
							 </tr>
							 
                             <tr>
						     <td align="center"><input type="submit" value="SignUp"></td><br>
					        </tr>
							 <tr>
                	  	     	<td> Do you have an account?<a href="LoginForm/Tutorlogin.html">Sign in </a></td>
                	  	     </tr>
							
                	  </table>
                </form>   	
   </body>
</html>