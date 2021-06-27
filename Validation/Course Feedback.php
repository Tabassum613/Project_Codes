<?php
            
     $budget="";
     $err_budget="";
	 
	 $Satisfied="";
     $err_Satisfied="";

     $benefits=[];
     $err_benefits="";
	 
	 $purpose="";
     $err_purpose="";

     $feedback="";
     $err_feedback="";

     $hasError = false;

      function Benefit($benefit){
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
     	
		//**************************************************
			
			if(!isset($_POST["budget"])){
				$err_budget="Answer required";
				$hasError = true;
			}
				else{
				$budget=$_POST["budget"]; 
				
            }    





            //**************************************************
			
			if(!isset($_POST["Satisfied"])){
				$err_Satisfied="Answer required";
				$hasError = true;
			}
				else{
				$Satisfied=$_POST["Satisfied"]; 
				
            }    




           //**********************Check Box Validation***************

         if(!isset($_POST["benefits"]))   
        {
            $err_benefits="At least one sourse have to be ticked";
            $hasError = true;
        }
        else
        {
            $benefits = $_POST["benefits"];
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
         <title>Course Feedback Form</title>
     </head>

       <body>
                    <form action="" method="post">
                    <table align="center">
                             <tr>
                               <td  align="center">
                      <b>
                         <h1>Course Feedback Form</h1>
                      </b>
                    <tr> 
							   <td>
                                  <h3>
       							  Please Submit This Course Feedback Form
                                  </h3>									  
                              </td>   
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
               <tr> 
                              <td>
                                  <b>
                                   The course packages were very budget friendly 
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
                   
                                  <b>What do you think about the benefits of this course?</b>
                                               
                              </td>
                           </tr>
						   
						   <tr>
                              	<td>
                              <input type="checkbox" value="Helpful for learning the photography" <?php if(Benefit("Helpful for learning the photography")) echo "checked" ?> name="benefits[]"> Helpful for learning the photography<br>
                              <input type="checkbox" value="Helpful for learning to manage the photography events" <?php if(Benefit("Helpful for learning to manage the photography events")) echo "checked" ?> name="benefits[]"> Helpful for learning to manage the photography events<br>
                              <input type="checkbox" value="I like this course" <?php if(Benefit("I like this course")) echo "checked" ?> name="benefits[]"> I like this course<br>
                              <input type="checkbox" value="Not beneficial" <?php if(Benefit("Not beneficial")) echo "checked" ?> name="benefits[]"> Not beneficial
                              </td>
                              <td>
                              	<span><?php echo $err_benefits;?></span>
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