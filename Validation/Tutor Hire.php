<?php
            
     $fname="";
     $lname="";
     $err_name="";

     $email="";
     $err_email=""; 

     $nid="";
     $err_nid=""; 

     $code="";
     $num="";
     $err_phn="";

     $add="";
     $err_add="";

     $gender="";
     $err_gender="";

     $categories=[];
     $err_categories="";

     $cd="";
     $err_cd="";

     $payment="";
     $err_payment="";
	 
	 $amount="";
	 $money="";
	 $err_amount="";

     $hasError = false;
     $Cash = array("Taka","Doller","Rupee","Pound");
     $CourseDu = array("3 Months","6 Months","9 Months");
	 

     function Category($category){
				global $categories;
				foreach($categories as $c){
					if($c == $category)
					{
					 return true;
				    }
				}
				return false;
			}
			
	
	
	

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {

     	//*****************Name Validation*********************


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

                elseif(is_numeric($_POST["fname"]) && is_numeric($_POST["lname"]))
               {
                   $err_name="Number is not allowed";
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


              //**********************National ID Number Validation***************
			
			if(empty($_POST["nid"])){
				$err_nid="National ID Number Required";
				$hasError = true;
			}

			    elseif(!is_numeric($_POST["nid"]) && !empty($_POST["nid"]))
                {
                $err_nid=" NID Number Required";
				$hasError = true;
                }

				elseif(is_numeric($_POST["nid"]))
			{
				$nid=$_POST["nid"]; 
				
            }    
             

            //*****************Number Validation*********************


     	if (empty($_POST["code"]) && empty($_POST["num"]))   
     	{
     		$err_phn="Code & Number Required";
			$hasError = true;
     	}

     	 elseif(is_numeric($_POST["code"]) && !empty($_POST["code"]) && is_numeric($_POST["num"]) && !empty($_POST["num"]))
               {
               	$code=$_POST["code"];
			    $num=$_POST["num"];
			   }


		   elseif(is_numeric($_POST["code"]) && !empty($_POST["code"]))
               {
               	   $err_phn="Number Required";
			        $hasError = true; 
					$code=$_POST["code"];
			   }

		     elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]))
               {
               	   $err_phn="Code Required";
			        $hasError = true; 
					$num=$_POST["num"];
			   }

			   elseif(!is_numeric($_POST["code"]) || !is_numeric($_POST["num"]))
               {
               	   
                    if(!is_numeric($_POST["code"]) && empty($_POST["num"]))
               	   {
                    $err_phn="Code must have to be Numeric ";  
			        $hasError = true; 
               	   }
               	   	elseif(empty($_POST["code"]) && !is_numeric($_POST["num"]))
               	   	{
               	   	$err_phn="Number must have to be Numeric ";
			        $hasError = true;
			         }

			         	elseif(!is_numeric($_POST["code"]) && !is_numeric($_POST["num"]))
               	   	{
               	   	 $err_phn="Code & Number are not allowed ";
			         $hasError = true;
			         }
			         
			   }

  
                

              //********************Address validation*******************************8

          if(empty($_POST["add"]))
            {
				$err_add ="Address Required";
				$hasError = true;
            }
            else
            {
				$add = $_POST["add"];
            }



             //**********************Gender Validation***************
			
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError = true;
			}
				else{
				$gender=$_POST["gender"]; 
				
            }    

          


            //**********************Check Box Validation***************

         if(!isset($_POST["categories"]))   
		{
			$err_categories="At least one category have to be ticked";
			$hasError = true;
		}
		else
		{
			$categories = $_POST["categories"];
		}

       
       //**********************Course Duration Validation***************
			
			if(!isset($_POST["CourseDu"])){
				$err_cd="Course Duration Required";
				$hasError = true;
			}
				else{
				$cd=$_POST["CourseDu"]; 
				
            }    






      //**********************Payment Validation***************

       if(!isset($_POST["Payment"]))   
		{
			$err_payment="Payment Required";
			$hasError = true;
		}
		else
		{
			$payment = $_POST["Payment"];
		}










           //*************************************************


     	if (empty($_POST["amount"]) && !isset($_POST["Cash"]))   
     	{
     		$err_amount="Not Required";
			$hasError = true;
     	}

     	 elseif(is_numeric($_POST["amount"]) && !empty($_POST["amount"]) && isset($_POST["Cash"]))
               {
               	$amount=$_POST["amount"];
			    $money=$_POST["Cash"];
			   }
	

		   elseif(is_numeric($_POST["amount"]) && !empty($_POST["amount"]))
               {
               	   
				   $err_amount="Money Required";
			        $hasError = true; 
					$amount=$_POST["amount"];
				   
			   }

		     elseif(isset($_POST["Cash"]))
               {
               	   $err_amount="Amount Required";
			        $hasError = true; 
					$money=$_POST["Cash"];
				  
			   }

			  else
			  {
			  $err_amount="Invalid";
			  $hasError = true;
 			  }





}


?>





 <!DOCTYPE html>
<html>
<head>
	<title>Tutor Hire Form</title>
</head>
<body>
      <h1>Tutor Hire Form</h1><br>

      <form action="" method="post">
      	    <table>
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
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

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
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
				   
				   <tr>
                        <td>
							    <b>Upload Your Passport Size Photo</b> 
					    </td>
				    </tr>
				   
				    <tr>
                        <td>
							     <input type="file" name="filename">
			    		</td>
				   </tr>
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
									
				   <tr>
      	    	   	   <td>
      	    	   	   	   <b>National ID Number</b>
      	    	   	   </td>
      	    	   </tr>
				   <tr>
      	    	   	          <td>
                                  	<input type="text" placeholder="NID Number" name="nid" value="<?php echo $nid; ?>" size="40">
                              </td>
                              <td>
                              	<span>
                              		<?php echo $err_nid;?>	
                              	</span>
                              </td> 
      	    	   </tr>
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Phone Number</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <input type="text" placeholder="Code" name="code" value="<?php echo $code; ?>" size="15" >-
      	    	   	   	   <input type="text" placeholder="Number" name="num" value="<?php echo $num; ?>" size="18">
      	    	   	   </td>
      	    	   	   <td>
                            <span>
                              	<?php echo $err_phn;?>	
                            </span>
                        </td>
      	    	   </tr>
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Address</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td> 
                              	<textarea cols="25" rows="3" name="add"  ><?php echo $add; ?></textarea>
                              </td>
                              <td>
                              	<span> <?php echo $err_add; ?> </span>
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
					       <b>Category</b>  
					    </td>
					</tr>

      	    	   <tr>
                        <td>
                                   <input type="checkbox" value="Natural Photography" <?php if(Category("Natural Photography")) echo "checked" ?> name="categories[]"> Natural Photography<br>
                                   <input type="checkbox" value="Wedding Photography" <?php if(Category("Wedding Photography")) echo "checked" ?> name="categories[]"> Wedding Photography<br>
                                   <input type="checkbox" value="Fashion Photography" <?php if(Category("Fashion Photography")) echo "checked" ?> name="categories[]"> Fashion Photography<br>
                                   <input type="checkbox" value="Event Photography" <?php if(Category("Event Photography")) echo "checked" ?> name="categories[]"> Event Photography<br>
                                   <input type="checkbox" value="Adventure Photography" <?php if(Category("Adventure Photography")) echo "checked" ?> name="categories[]"> Adventure Photography<br>
                                   <input type="checkbox" value="Film Photography  " <?php if(Category("Film Photography  ")) echo "checked" ?> name="categories[]"> Film Photography  
                        </td>
                        <td>
                              	<span>
                              	   <?php echo $err_categories;?>
                              	</span>
                        </td>
                    </tr>

      	    	            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Course Duration</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <select name="CourseDu">
      	    	   	   	   	       <option selected disabled>Months</option>
								  <?php
								  foreach($CourseDu as $c)
								  {
								  	if($cd == $c)
								  		echo "<option selected>$c</option>" ;
								  	else
								  		echo "<option>$c</option>";
								  }
								  ?>
      	    	   	   	   </select>
      	    	   	   </td>
      	    	   	   <td>
                              	<span>
                              	   <?php echo $err_cd;?>
                              	</span>
                        </td>
      	    	   </tr>

      	    	            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

      	    	   
      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Expected Salary</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <input type="text" placeholder="Amount" name="amount" value="<?php echo $amount; ?>">
      	    	   	   	   <select name="Cash">
      	    	   	   	   	       <option selected disabled>Money</option>
								  <?php
								  foreach($Cash as $ch)
								  {
								  	if($money == $ch)
								  		echo "<option selected>$ch</option>" ;
								  	else
								  		echo "<option>$ch</option>";
								  }
								  ?>
      	    	   	   	   </select>
      	    	   	   </td>
					   <td>
                              	<span>
                              	   <?php echo $err_amount;?>
                              	</span>
                        </td>
      	    	   </tr>
				   
				            <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Salary Recieved By</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
                           <input type="radio" <?php if($payment == "Bkash") echo "checked";?> name="Payment" value="Bkash">Bkash
                           <input type="radio" <?php if($payment == "Rocket") echo "checked";?> name="Payment" value="Rocket">Rocket
                           <input type="radio" <?php if($payment == "Nogot") echo "checked";?> name="Payment" value="Nogot">Nogot
                           <input type="radio" <?php if($payment == "Upay") echo "checked";?> name="Payment" value="Upay">Upay
                       </td>

                       <td>
      	    	   	   	   <span>
      	    	   	   	   	     <?php echo $err_payment;?>
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