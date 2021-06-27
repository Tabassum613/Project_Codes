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
	 
	 $course="";
     $err_course="";
	 
	 $level="";
     $err_level="";
	 
	 $cd="";
     $err_cd="";
	 
	 $payment="";
     $err_payment="";
	 
	 $hasError =false ;
	 
	 $Course = array("Wedding Photography","Event Photography","Adventure Photography","Fashion Photography","Film Photography");
	 
	 $Levels = array("Classical","Advance","Professional");
					   
	 $CourseD = array("4 Month","5 Month","6 Month");
	 
	 $Code = array("+880","+91","+39","+44");

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
         //*****************Name Validation*********************


     	if (empty($_POST["fname"]) && empty($_POST["lname"]))   
        {
            $err_name="First name & Last name required";
            $hasError = true;
        }

         elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]) && !is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                $fname=$_POST["fname"];
                $lname=$_POST["lname"];
               }


           elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]))
               {
                   $err_name="Last name required";
                    $hasError = true; 
					$fname=$_POST["fname"];
               }

             elseif(!is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                   $err_name="First name required";
                    $hasError = true; 
					$lname=$_POST["lname"];
               }

               elseif(is_numeric($_POST["fname"]) || is_numeric($_POST["lname"]))
               {
                   if(is_numeric($_POST["fname"]))
                   {
                    $err_name="Numeric number is not allowed ";  
                    $hasError = true; 
                   }
                    elseif(is_numeric($_POST["lname"]))
                    {
                    $err_name="Numeric number is not allowed ";
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
                  
                $err_email="Email required ";
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
                   $err_email="Use .(dot) after @";
				   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
				   $hasError = true;
                }
				
				
				//**************Phone Number validation*********************
				
				
				
				if (!isset($_POST["Code"]) && empty($_POST["num"]))   
        {
            $err_phn="Code & Number required";
            $hasError = true;
        }
		
		
		elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]) && isset($_POST["Code"]))
               {
                $code=$_POST["Code"];
                $num=$_POST["num"];
               }
			   
			   
		 elseif(isset($_POST["Code"]))
               {
                   $err_phn="Number required";
                    $hasError = true; 
					$code=$_POST["Code"];
               }

                elseif(is_numeric($_POST["num"]) && !empty($_POST["num"]))
               {
                   $err_phn="Code required";
                    $hasError = true; 
					$num=$_POST["num"];
               }
            
            else
			  {
			  $err_phn="Invalid";
			  $hasError = true;
 			  }

				
				
				
				 //********************Address validation*******************************8

               if(empty($_POST["add"]))
               {
				$err_add ="Address required";
				$hasError = true;
               }
              else
               {
				$add = $_POST["add"];
              }
				
				
				//**********************Gender Validation***************
			
			  if(!isset($_POST["gender"]))
			  {
				$err_gender="Gender required";
				$hasError = true;
			  }
				else
				{
				$gender=$_POST["gender"]; 
				
                }   
				
				//*********************Courses***********************
				
				
				if(!isset($_POST["Course"])){
				$err_course="Courses required";
				$hasError = true;
			}
				else{
				$course=$_POST["Course"]; 
				
            }   
				
				
				
				//*********************Levels***********************
				
				
				if(!isset($_POST["Levels"])){
				$err_level="Levels required";
				$hasError = true;
			}
				else{
				$level=$_POST["Levels"]; 
				
            }   
				
				
				
				//*********************Course Duration***********************
				
				
				if(!isset($_POST["CourseD"])){
				$err_cd="Courses duration required";
				$hasError = true;
			}
				else{
				$cd=$_POST["CourseD"]; 
				
            }   
				
				
			 //**********************Payment Validation***************

       if(!isset($_POST["Payment"]))   
		{
			$err_payment="Payment required";
			$hasError = true;
		}
		else
		{
			$payment = $_POST["Payment"];
		}	
				
				



     }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Apply Form</title>
</head>
<body>
	  <h1>Apply Form</h1><br>
      <form action="" method="post">
      	    <table>
      	    	   <tr>
                       <td>
                           <b>Applicant Name</b>
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
                           <b>Applicant Email</b>
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
                           <b>Applicant Phone Number</b>
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
                           <b>Applicant Address</b>
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


                   <tr>
                       <td>
                           <b>Applicant Gender</b>
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
                   	   	   <b>Course Catagory</b>
                   	   </td>
                   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   <select name="Course">
      	    	   	   	   	       <option selected disabled>Courses</option>
								  <?php
								  foreach($Course as $c)
								  {
								  	if($course == $c)
								  		echo "<option selected>$c</option>" ;
								  	else
								  		echo "<option>$c</option>";
								  }
								  ?>
      	    	   	   	   </select>
      	    	   	   </td>
      	    	   	   <td>
                              	<span>
                              	   <?php echo $err_course;?>
                              	</span>
                        </td>
      	    	        </tr>

                    
 
                   <tr>
                   	   <td>
                   	   	   <b>Types of Course</b>
                   	   </td>
                   </tr>

                   <tr>
      	    	   	   <td>
      	    	   	   	   <select name="Levels">
      	    	   	   	   	       <option selected disabled>Levels</option>
								  <?php
								  foreach($Levels as $l)
								  {
								  	if($level == $l)
								  		echo "<option selected>$l</option>" ;
								  	else
								  		echo "<option>$l</option>";
								  }
								  ?>
      	    	   	   	   </select>
      	    	   	   </td>
      	    	   	   <td>
                              	<span>
                              	   <?php echo $err_level;?>
                              	</span>
                        </td>
      	    	        </tr>

                   <tr>
                   	   <td>
                   	   	   <b>Choose Course Duration</b>
                   	   </td>
                   </tr>
				   
                      <tr>
      	    	   	   <td>
      	    	   	   	   <select name="CourseD">
      	    	   	   	   	       <option selected disabled>Course Duration</option>
								  <?php
								  foreach($CourseD as $d)
								  {
								  	if($cd == $d)
								  		echo "<option selected>$d</option>" ;
								  	else
								  		echo "<option>$d</option>";
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
						
						
                   <tr>
                   	   <td>
                   	   	   <b>Course Enrolment Fee</b>
                   	   </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" value="8000 TK Only">
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <b>Payment With:</b>
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
                       <td align="center">
                            <input type="submit" value="Submit">
                       </td>
                  </tr>
      	    </table>
      </form>
</body>
</html>