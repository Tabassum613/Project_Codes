
<?php
            
     $fname="";
     $err_fname="";  

     $lname="";
     $err_lname="";

     $email="";
     $err_email=""; 

     $gender="";
     $err_gender="";

     $quality="";
     $err_quality="";

     $message="";
     $err_message="";

     $hasError = false;

     

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
     	//****************************First Name  Validation*********************
				
                if(empty($_POST["fname"])){
               $err_fname="First Name Required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]))
               {
               	if(strlen($_POST["fname"]) >= 3)
               	{
                $fname=$_POST["fname"];
                }

                
                elseif(strlen($_POST["fname"]) < 3)
                {
                	$err_fname="Name must contain at least 3 characters";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["fname"]))
				{
                    $err_fname="Number is not allowed";
			        $hasError = true; 
				}
		      



//****************************Last Name  Validation*********************
				
                if(empty($_POST["lname"])){
               $err_lname="Last Name Required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
               	if(strlen($_POST["lname"]) >= 3)
               	{
                $lname=$_POST["lname"];
                }

                
                elseif(strlen($_POST["lname"]) < 3)
                {
                	$err_lname="Name must contain at least 3 characters";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["lname"]))
				{
                    $err_lname="Number is not allowed";
			        $hasError = true; 
				}
		      




              //**********************Email  Validation************************
		     



		       

			     
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
                     $err_email="Enter a Valid Email";
					 $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="Use .(dot) after @";
				   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid Email Address";  
				   $hasError = true;
                }

             //**********************Gender Validation***************
			
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError = true;
			}
				else{
				$gender=$_POST["gender"]; 
				
            }    

          //**************************************************
			
			if(!isset($_POST["quality"])){
				$err_quality="Rating required";
				$hasError = true;
			}
				else{
				$quality=$_POST["quality"]; 
				
            }    

         //***************************************************

          if(empty($_POST["message"]))
            {
				$err_message ="Message Required";
				$hasError = true;
            }
            else
            {
				$message = $_POST["message"];
            }



}


?>



<html>
       <head>
	       <title>Website Rating Form</title>
	   </head>

       <body>
                <h1>Website Rating Form </h1>
                    <form action="" method="post">
                        <table >
                            <tr>
                              <td>
							      <b>
                                   First Name
                                  </b>								   
                              </td>
							  </tr>
  
                            <tr>
                             <td>
                                  <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" size="35">
                              </td>
                              <td>
                              	<span>
                              		<?php echo $err_fname;?>	
                              	</span>
                              </td>
							 </tr>
							 
							 <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
  
                            <tr> 
							  <td>
                                  <b>
       							   Last Name
                                  </b>									  
                              </td>   
                            </tr>
  
                            <tr>
                              <td>
                                  <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" size="35">
                              </td>
                              <td>
                              	<span>
                              		<?php echo $err_lname;?>	
                              	</span>
                              </td>
                            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
							 <tr>
                              <td>
							      <b>
                                   Email
                                  </b>								   
                              </td>
							   </tr>
  
                            <tr>
                             <td>
                              	<input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="35">
                              </td>
                              <td>
                              	<span>
                              		<?php echo $err_email;?>	
                              	</span>
                              </td>    
							 </tr>
							 
							 <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
  
                            <tr>
      	    	   	          <td>
      	    	   	   	        <b>Gender</b>
      	    	   	          </td>
      	    	             </tr>
				             <tr>
      	    	   	          </td>
                              <td>
                              	  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                              </td>
                              <td>
                              	<span><?php echo $err_gender;?></span>
                              </td>
      	    	            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
							<tr>
                              <td>
							     
                                  <b>Please Rate Our Website</b>
                                 						   
                              </td>
							  </tr>
  
                              <tr>
                              	<td>
                              	  <input type="radio" name="quality" value="Excellent" <?php if($quality == "Excellent") echo "checked"?> > Excellent <br>
                                  <input type="radio" name="quality" value="Very Good" <?php if($quality == "Very Good") echo "checked"?> > Very Good <br>
                                  <input type="radio" name="quality" value="Good" <?php if($quality == "Good") echo "checked"?> > Good <br>
                                  <input type="radio" name="quality" value="Bad" <?php if($quality == "Bad") echo "checked"?> > Bad <br>
                                  <input type="radio" name="quality" value="Very Bad" <?php if($quality == "Very Bad") echo "checked"?> > Very Bad
                                 
                              </td>
                              <td>
                              	<span><?php echo $err_quality;?></span>
                              </td> 
                            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
						
							<tr>
                                <td></td> 
                            </tr>
							<tr>
      	    	   	          <td>
      	    	   	   	        <b>Any Message....</b>
      	    	   	          </td>
      	    	            </tr>

      	    	            <tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="34" rows="3" name="message"  ><?php echo $message; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_message;?>
                              	</span>
                              </td> 
      	    	            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
							<tr>
                              <td align="center"><input type="submit" value="Submit"></td>
                            </tr>
							
                        </table>
                    </form>
        </body>
</html>