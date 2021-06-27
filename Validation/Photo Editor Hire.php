<?php
            
     $fname="";
     $lname="";
     $err_name="";

     $email="";
     $err_email=""; 

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
	 
	 $amount="";
	 $money="";
	 $err_amount="";

     $salary="";
     $err_salary="";


     $hasError = false;
	 
	 $Code = array("+880","+91","+39","+44");
	 
     $Cash = array("Taka","Doller","Rupee","Pound");
	 

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

               

 
             

            //*****************Number Validation*********************


        if (!isset($_POST["Code"]) && empty($_POST["num"]))   
        {
            $err_phn="Code & Number Required";
            $hasError = true;
        }
		
		
		elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]) && isset($_POST["Code"]))
               {
                $code=$_POST["Code"];
                $num=$_POST["num"];
               }
			   
			   
		 elseif(isset($_POST["Code"]))
               {
                   $err_phn="Number Required";
                    $hasError = true; 
					$code=$_POST["Code"];
               }

                elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]))
               {
                   $err_phn="Code Required";
                    $hasError = true; 
					$num=$_POST["num"];
               }
            
            else
			  {
			  $err_phn="Invalid";
			  $hasError = true;
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
            $err_categories="At least one day have to be ticked";
            $hasError = true;
        }
        else
        {
            $categories = $_POST["categories"];
        }

   




      //**********************Salary Validation***************

       if(!isset($_POST["salary"]))   
        {
            $err_salary="Payment Required";
            $hasError = true;
        }
        else
        {
            $salary = $_POST["salary"];
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
	<meta charset="utf-8">
	<title>Photo Editor Hire Form</title>
</head>
<body>
      <h1>Photo Editor Hire Form</h1><br>

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
                             <b>Upload Your Passport Size Photo</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file">
                         </td>
                     </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Phone Number</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <select name="Code">
      	    	   	   	   	       <option selected disabled>Code</option>
								  <?php
								  foreach($Code as $cd)
								  {
								  	if($code == $cd)
								  		echo "<option selected>$cd</option>" ;
								  	else
								  		echo "<option>$cd</option>";
								  }
								  ?>
      	    	   	   	   </select>
						   <input type="text" placeholder="Number" name="num" value="<?php echo $num; ?>">
      	    	   	   </td>
					   <td>
                              	<span>
                              	   <?php echo $err_phn;?>
                              	</span>
                        </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Address</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td> 
                                <textarea cols="33" rows="3" name="add"  ><?php echo $add; ?></textarea>
                              </td>
                              <td>
                                <span> <?php echo $err_add; ?> </span>
                              </td>
      	    	   </tr>

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

                     <tr>
                         <td>
                             <b>Show Some of Your Photo Edit</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file">
                         </td>
                     </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Available Day Per Week</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	      <input type="checkbox" value="Saturday" <?php if(Category("Saturday")) echo "checked" ?> name="categories[]">Saturday<br>
                              <input type="checkbox" value="Sunday" <?php if(Category("Sunday")) echo "checked" ?> name="categories[]">Sunday<br>
                              <input type="checkbox" value="Monday" <?php if(Category("Monday")) echo "checked" ?> name="categories[]">Monday<br>
                              <input type="checkbox" value="Tuesday" <?php if(Category("Tuesday")) echo "checked" ?> name="categories[]">Tuesday<br>
                              <input type="checkbox" value="Wednesday" <?php if(Category("Wednesday")) echo "checked" ?> name="categories[]">Wednesday<br>
                              <input type="checkbox" value="Thursday" <?php if(Category("Thursday")) echo "checked" ?> name="categories[]">Thursday<br>
                              <input type="checkbox" value="Friday" <?php if(Category("Friday")) echo "checked" ?> name="categories[]">Friday
      	    	   	   </td>
                       <td>
                                <span>
                                   <?php echo $err_categories;?>
                                </span>
                        </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Available Time</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <select>
      	    	   	   	   	       <option selected="Clock" disabled="Clock"> Clock</option>
      	    	   	   	   </select>

      	    	   	   	   <select>
      	    	   	   	   	       <option selected="AM/PM" disabled="AM/PM">AM/PM</option>
      	    	   	   	   </select>

      	    	   	   	   <span>&nbsp; To &nbsp;</span>

      	    	   	   	   <select>
      	    	   	   	   	       <option selected="Clock" disabled="Clock"> Clock</option> &nbsp;
      	    	   	   	   </select>

      	    	   	   	   <select>
      	    	   	   	   	       <option selected="AM/PM" disabled="AM/PM">AM/PM</option>
      	    	   	   	   </select>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Expected Salary</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <input type="text" placeholder="Salary Amount" name="amount" value="<?php echo $amount; ?>">
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

      	    	   <tr>
      	    	   	   <td>
      	    	   	   	   <b>Salary Recieve Via</b>
      	    	   	   </td>
      	    	   </tr>

      	    	   <tr>
      	    	   	   <td>
                           <input type="radio" <?php if($salary == "Bkash") echo "checked";?> name="salary" value="Bkash">Bkash
                           <input type="radio" <?php if($salary == "Rocket") echo "checked";?> name="salary" value="Rocket">Rocket
                           <input type="radio" <?php if($salary == "Nogot") echo "checked";?> name="salary" value="Nogot">Nogot
                           <input type="radio" <?php if($salary == "Upay") echo "checked";?> name="salary" value="Upay">Upay
                       </td>

                       <td>
                           <span>
                                 <?php echo $err_salary;?>
                           </span>
                       </td>
      	    	   </tr>

      	    	   <tr>
                       <td align="center">
                            <input type="submit" value="Submit">
                       </td>
                  </tr>
      	    </table>
      </form>
</body>
</html>