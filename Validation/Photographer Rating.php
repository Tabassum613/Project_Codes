<?php
            
     $fname="";
     $err_fname="";  

     $lname="";
     $err_lname="";

     $email="";
     $err_email=""; 

     $gender="";
     $err_gender="";
    
     $experience="";
     $err_experience="";
     
     $quality="";
     $err_quality="";

     $communication="";
     $err_communication="";

     $shoot="";
     $err_shoot="";



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

             //**********************Gender Validation***************
			
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError = true;
			}
				else{
				$gender=$_POST["gender"]; 
				
            }    

          //**********************Question validation***************
      
      if(!isset($_POST["experience"])){
        $err_experience="Answer Required";
        $hasError = true;
      }
        else{
        $experience=$_POST["experience"]; 
        
            }  


       if(!isset($_POST["quality"])){
        $err_quality="Answer Required";
        $hasError = true;
      }
        else{
        $quality=$_POST["quality"]; 
        
            }    


         if(!isset($_POST["communication"])){
        $err_communication="Answer Required";
        $hasError = true;
      }
        else{
        $communication=$_POST["communication"]; 
        
            }    


           if(!isset($_POST["shoot"])){
        $err_shoot="Answer Required";
        $hasError = true;
      }
        else{
        $shoot=$_POST["shoot"]; 
        
            }      


         //***************************************************8

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
         <title>Photographer Rating Form</title>
     </head>

       <body>
                <h1>Photographer Rating Form </h1>
                     <form action="" method="post">
                        <table >
                            <tr>
                              <td colspan="2">
                                  <b>
                                   First Name
                                  </b>                   
                              </td>
                            </tr>
  
                            <tr>
                             <td colspan="2">
                                  <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" size="40">
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

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
                              <td colspan="2">
                                  <b>
                                     Last Name
                                  </b>                    
                              </td>   
                            </tr>
  
                            <tr>
                              <td colspan="2">
                                  <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>" size="40">
                              </td>

                              <td></td>
                             <td></td>
                             <td></td>

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
                              <td colspan="2">
                                  <b>
                                   Email
                                  </b>                   
                              </td>
                           </tr>
  
                            <tr>
                             <td colspan="2">
                                <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

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
                            <td colspan="2">
                              <b>Gender</b>
                            </td>
                           </tr>
                     <tr>
                            </td>
                              <td colspan="2">
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_gender;?></span>
                              </td>
                          </tr>
              
                          <tr><td></td></tr>
                          <tr><td></td></tr>
                           <tr><td></td></tr>
                          <tr><td></td></tr>
                    <tr>
                      <td>
                        <h3>How Would You Like to Rate :</h3>
                      </td>
                    </tr>
              
                            <tr>
                              <td>
                                   <b>
                                  1. Overall Experience
                                  </b>                   
                              </td>
                              <td >
                                  <input type="radio" name="experience" value="Excellent" <?php if($experience == "Excellent") echo "checked"?> >Excellent
                                  <input type="radio" name="experience" value="Good" <?php if($experience == "Good") echo "checked"?> >Good
                                  <input type="radio" name="experience" value="Fair" <?php if($experience == "Fair") echo "checked"?> >Fair
                                  <input type="radio" name="experience" value="Poor" <?php if($experience == "Poor") echo "checked"?> >Poor
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_experience ; ?></span>
                              </td>
                                     
                            </tr>
              
                            <tr>
                              <td>
                                  <b>
                                  2. Photograph Quality
                                  </b>                   
                              </td>
                              <td >
                                   <input type="radio" name="quality" value="Excellent" <?php if($quality == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="quality" value="Good" <?php if($quality == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="quality" value="Fair" <?php if($quality == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="quality" value="Poor" <?php if($quality == "Poor") echo "checked"?> >Poor
                              </td>

                             <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_quality ; ?></span>
                              </td>
 
                             </tr>
               
                             <tr>
                              <td>
                                  <b>
                                 3. Level of Communication
                                  </b>                   
                              </td>
                              <td>
                                   <input type="radio" name="communication" value="Excellent" <?php if($communication == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="communication" value="Good" <?php if($communication == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="communication" value="Fair" <?php if($communication == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="communication" value="Poor" <?php if($communication == "Poor") echo "checked"?> >Poor                   
                              </td>  

                              <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_communication ; ?></span>
                              </td> 
                            </tr>
              
                           <tr>
                              <td>
                                  <b>
                                  4. Level of comfort during the shoot
                                  </b>                   
                              </td>
                              <td>
                                   <input type="radio" name="shoot" value="Excellent" <?php if($shoot == "Excellent") echo "checked"?> >Excellent
                                   <input type="radio" name="shoot" value="Good" <?php if($shoot == "Good") echo "checked"?> >Good  
                                   <input type="radio" name="shoot" value="Fair" <?php if($shoot == "Fair") echo "checked"?> >Fair
                                   <input type="radio" name="shoot" value="Poor" <?php if($shoot == "Poor") echo "checked"?> >Poor                 
                              </td> 

                              <td></td>
                             <td></td>
                             <td></td>

                              <td>
                                <span><?php echo $err_shoot ; ?></span>
                              </td> 
                            </tr>
              
                            <tr><td></td></tr>
                            <tr><td></td></tr>
                            <tr><td></td></tr>
               
                             <tr>
                                <td></td> 
                            </tr>
                            <tr>
                            <td colspan="2">
                              <b>Any Message....</b>
                            </td>
                          </tr>

                          <tr>
                             <td colspan="2">
                               <textarea  cols="40" rows="3" name="message"  ><?php echo $message; ?></textarea>
                             </td>

                             <td></td>
                             <td></td>
                             <td></td>

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
                              <td colspan="2" align="center">
                                    <input type="submit" value="Submit">
                              </td>
                            </tr>
              
                        </table>
                    </form>
        </body>
</html>
