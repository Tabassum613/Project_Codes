<?php
            
     $budget="";
     $err_budget="";

     $behavior="";
     $err_behavior="";
	 
	 $Satisfied="";
     $err_Satisfied="";

     $benefit="";
     $err_benefit="";
	 
	 $purpose="";
     $err_purpose="";

     $feedback="";
     $err_feedback="";

     $hasError = false;

     

     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
     	
		//**************************************************
			
			if(!isset($_POST["budget"])){
				$err_budget="Answer required";
				$hasError = true;
			}
				else{
				$budget=$_POST["budget"]; 
				
            }    



		//**************************************************
			
			if(!isset($_POST["behavior"])){
				$err_behavior="Answer required";
				$hasError = true;
			}
				else{
				$behavior=$_POST["behavior"]; 
				
            } 



            //**************************************************
			
			if(!isset($_POST["Satisfied"])){
				$err_Satisfied="Answer required";
				$hasError = true;
			}
				else{
				$Satisfied=$_POST["Satisfied"]; 
				
            }    



		//**************************************************
			
			if(!isset($_POST["benefit"])){
				$err_benefit="Answer required";
				$hasError = true;
			}
				else{
				$benefit=$_POST["benefit"]; 
				
            } 



         //***************************************************

          if(empty($_POST["purpose"]))
            {
				$err_purpose ="Message Required";
				$hasError = true;
            }
            else
            {
				$purpose = $_POST["purpose"];
            }


			
		

         //***************************************************

          if(empty($_POST["feedback"]))
            {
				$err_feedback ="Feedback Required";
				$hasError = true;
            }
            else
            {
				$feedback = $_POST["feedback"];
            }



}


?>






<html>
       <head>
         <title>Photographer Feedback Form</title>
     </head>

       <body>
                    <form action="" method="post">
                    <table align="center">
                             <tr>
                               <td  align="center">
                      <b>
                         <h1>Photographer Feedback Form</h1>
                      </b>
                    <tr> 
							   <td>
                                  <h3>
       							   Please Submit This Photographer Feedback Form
                                  </h3>									  
                              </td>   
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
               <tr> 
                              <td>
                                  <b>
                                   The photography packages were very budget friendly 
                                  </b>

                              </td>
                 </tr>
                  <tr>
                              	<td>
                              	  <input type="radio" name="budget" value="Strongly agree" <?php if($budget == "Strongly agree") echo "checked"?> > Strongly agree <br>
                                  <input type="radio" name="budget" value="Agree" <?php if($budget == "Agree") echo "checked"?> > Agree<br>
                                  <input type="radio" name="budget" value="Disagree" <?php if($budget == "Disagree") echo "checked"?> > Disagree <br>
                                  <input type="radio" name="budget" value="Strongly Disagree" <?php if($budget == "Strongly Disagree") echo "checked"?> > Strongly Disagree <br>
                                  <input type="radio" name="budget" value="Neither agree nor disagree" <?php if($budget == "Neither agree nor disagree") echo "checked"?> > Neither agree nor disagree
                                 
                              </td>
                              <td>
                              	<span><?php echo $err_budget;?></span>
                              </td> 
                        </tr>
							
				
  
                             <tr><td></td></tr>
                             <tr><td></td></tr>
                      
                        <tr> 
                            <td>
                                  <b>
                                      The photographer behaved very well
                                  </b>                    
                            </td>
                        </tr>
						<tr>
                              	<td>
                              	  <input type="radio" name="behavior" value="Strongly agree" <?php if($behavior == "Strongly agree") echo "checked"?> > Strongly agree <br>
                                  <input type="radio" name="behavior" value="Agree" <?php if($behavior == "Agree") echo "checked"?> > Agree<br>
                                  <input type="radio" name="behavior" value="Disagree" <?php if($behavior == "Disagree") echo "checked"?> > Disagree <br>
                                  <input type="radio" name="behavior" value="Strongly Disagree" <?php if($behavior == "Strongly Disagree") echo "checked"?> > Strongly Disagree <br>
                                  <input type="radio" name="behavior" value="Neither agree nor disagree" <?php if($behavior == "Neither agree nor disagree") echo "checked"?> > Neither agree nor disagree
                                 
                              </td>
                              <td>
                              	<span><?php echo $err_behavior;?></span>
                              </td> 
                                </tr>
				  
				  
				  
				  
                            <tr><td></td></tr>
                           <tr><td></td></tr> 
                         <tr> 
                            <td>
                                  <b>
                               Are you Satisfied?
                                  </b>                    
                            </td>
                        </tr>
						
						<td>
                              	  <input type="radio" name="Satisfied" value="Yes" <?php if($Satisfied == "Yes") echo "checked"?> > Yes <br>
                                  <input type="radio" name="Satisfied" value="No" <?php if($Satisfied == "No") echo "checked"?> > No
                                  
                                 
                              </td>
                              <td>
                              	<span><?php echo $err_Satisfied;?></span>
                              </td> 
                                </tr>
								
								
                         
  
                          <tr><td></td></tr>
                         <tr><td></td></tr>
                         <tr><td></td></tr>
              
                     
                           <tr>
                              <td>
                   
                                  <b>What do you think about the benefits of this photographer?</b>
                                               
                              </td>
                           </tr>
						   
						   <tr>
                              	<td>
                              	  <input type="radio" name="benefit" value="Helpful for creative ideas" <?php if($benefit == "Helpful for creative ideas") echo "checked"?> > Helpful for creative ideas <br>
                                  <input type="radio" name="benefit" value="Helpful for events" <?php if($benefit == "Helpful for events") echo "checked"?> > Helpful for events<br>
                                  <input type="radio" name="benefit" value="Not satisfied" <?php if($benefit == "Not satisfied") echo "checked"?> > Not satisfied 
                              </td>
                              <td>
                              	<span><?php echo $err_benefit;?></span>
                              </td> 
                                </tr>
								
								
      
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
            
                            <tr>
                              <td>
                                  <b>
                                   What was the reason for hiring this photographer?
                                  </b>                   
                              </td>
                            </tr>
  
                        <tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="50" rows="5" name="purpose"  ><?php echo $purpose; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_purpose;?>
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
                              <b>Please write a Feedback</b>
                            </td>
                   </tr>

                   <tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="50" rows="5" name="feedback"  ><?php echo $feedback; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_feedback;?>
                              	</span>
                              </td> 
      	    	        </tr>
              
                          <tr><td></td></tr>
                          <tr><td></td></tr>
                          <tr><td></td></tr>
          
                    <tr>
                              <td align="center"><input type="Submit" value="Submit"></td>
                    </tr>
              
      
                        </table>
                    </form>
        </body>
</html>