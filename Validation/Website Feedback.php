<?php

     $goal="";
     $err_goal="";  

     $reason="";
     $err_reason="";  

     $reason1="";
     $err_reason1="";  

     $benefits=[];
     $err_benefits="";  

     $suggestions="";
     $err_suggestions="";  

     $hasError = false;


     function Benefits($benefit){
				global $benefits;
				foreach($benefits as $b){
					if($b == $benefit)
					{
					 return true;
				    }
				}
				return false;
			}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{


            //**********************Goal***************
			
			if(!isset($_POST["goal"]))
			{
				$err_goal="Goal required";
				$hasError = true;
			}
				else
		    {
				$goal=$_POST["goal"]; 
				
            }     
            //***************************************************8

          if(empty($_POST["reason"]))
            {
				$err_reason ="Reason required";
				$hasError = true;
            }
            else
            {
				$reason = $_POST["reason"];
            }

             //***************************************************8

          if(empty($_POST["reason1"]))
            {
				$err_reason1 ="Not found reason";
				$hasError = true;
            }
            else
            {
				$reason1 = $_POST["reason1"];
            }

            //**********************Check Box Validation***************

         if(!isset($_POST["benefits"]))   
		{
			$err_benefits="At least one source have to be ticked";
			$hasError = true;
		}
		else
		{
			$benefits = $_POST["benefits"];
		}


           
             //******************suggestions*********************************8

          if(empty($_POST["suggestions"]))
            {
				$err_suggestions ="Suggestion required";
				$hasError = true;
            }
            else
            {
				$suggestions = $_POST["suggestions"];
            }

}


?>

<html>
       <head>
	       <title>Website Feedback Form</title>
	   </head>

       <body>
                <h1>Website Feedback Form </h1>
                    <form action="" method="post" >
                        <table >
						
						 <tr> 
							  <td>
                                  <h3>
       							   We would like your feedback to improve our website.
                                  </h3>									  
                              </td>   
                         </tr>
						
						<tr> 
							  <td>
                                  <b>
       							   Did you achieve your goal? 
                                  </b>									  
                              </td>   
                         </tr>
						 
						    <tr>
                              <td>   
                              	  <input type="radio" name="goal" value="Yes" <?php if($goal == "Yes") echo "checked"?> > Yes 
                                  <input type="radio" name="goal" value="Partially" <?php if($goal == "Partially") echo "checked"?> > Partially
                                  <input type="radio" name="goal" value="No" <?php if($goal == "No") echo "checked"?> > No
                              </td>
                              <td>
                              	<span><?php echo $err_goal;?></span>
                              </td> 
                            </tr>
							
							 <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
                            <tr>
                              <td>
							      <b>
                                   What was the reason for your visit?
                                  </b>								   
                              </td>
							  </tr>
  
                            <tr>
                              <td>
                                 <textarea  cols="34" rows="3" name="reason"  ><?php echo $reason; ?></textarea>									  
                              </td>
                              <td>
                              	<span> 
                              		<?php echo $err_reason; ?> 
                              	</span>
                              </td>
							 </tr>
							 
							 <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
  
                            
  
                            <tr>
      	    	   	          <td>
      	    	   	   	        <b>What was the reason you could not achieve your goal?</b>
      	    	   	          </td>
      	    	             </tr>
				             <tr>
      	    	   	          <td>
      	    	   	   	        <textarea  cols="34" rows="3" name="reason1"  ><?php echo $reason1; ?></textarea>	 
      	    	   	          </td>
      	    	   	          <td>
                              	<span> 
                              		<?php echo $err_reason1; ?> 
                              	</span>
                              </td>
      	    	            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
							<tr>
                              <td>
							     
                                  <b>What do you think about the benefits of this website?</b>
                                 						   
                              </td>
							  </tr>
  
                              <tr>
							  <td>
							  	   <input type="checkbox" value="Helpful for hiring photographe" <?php if(Benefits("Helpful for hiring photographe")) echo "checked" ?> name="benefits[]"> Helpful for hiring photographe<br>

                                   <input type="checkbox" value="Helpful for getting more creative photos" <?php if(Benefits("Helpful for getting more creative photos")) echo "checked" ?> name="benefits[]"> Helpful for getting more creative photos<br>

                                   <input type="checkbox" value="Helpful for hiring tutor" <?php if(Benefits("Helpful for hiring tutor")) echo "checked" ?> name="benefits[]"> Helpful for hiring tutor<br>

                                   <input type="checkbox" value="Not satisfied" <?php if(Benefits("Not satisfied")) echo "checked" ?> name="benefits[]"> Not satisfied<br>
                                  
                              </td> 
                              <td>
                              	<span>
                              	   <?php echo $err_benefits;?>
                              	</span>
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
      	    	   	   	        <b>Do you have any suggestions to make our website better?</b>
      	    	   	          </td>
      	    	            </tr>

      	    	            <tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="34" rows="3" name="suggestions"  ><?php echo $suggestions; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span> 
                              		<?php echo $err_suggestions; ?> 
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