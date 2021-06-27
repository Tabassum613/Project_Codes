<?php
            
     $budget="";
     $err_budget="";

     $behavior="";
     $err_behavior="";
	 
	 $Satisfied="";
     $err_Satisfied="";

     $Star="";
     $err_Star="";
	 
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
			
			if(!isset($_POST["Star"])){
				$err_Star="Answer required";
				$hasError = true;
			}
				else{
				$Star=$_POST["Star"]; 
				
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
         <title>Tutor Rating Form</title>
     </head>

       <body>
                    <form action="" method="post">
                    <table align="center">
                             <tr>
                               <td  align="center">
                      <b>
                          <h1>Tutor Rating Form</h1>
                      </b>
            <tr> 
                     <td>
                                  <b>
                                  <h3>Please Submit This Rating Form</h3>
                                  </b>                   
                               </td>   
               </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
               <tr> 
                              <td>
                                  <b>
                                   This tutor is very helpful 
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
                                     The course tutor behaved very well
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
                   
                                  <b>How many stars do you want to give?</b>
                                               
                              </td>
                           </tr>
						   
						   <tr>
                              	<td>
                              	  <input type="radio" name="Star" value="1" <?php if($Star == "1") echo "checked"?> > 1 <br>
                                  <input type="radio" name="Star" value="2" <?php if($Star == "2") echo "checked"?> > 2<br>
                                  <input type="radio" name="Star" value="3" <?php if($Star == "3") echo "checked"?> > 3 <br>
                                  <input type="radio" name="Star" value="4" <?php if($Star == "4") echo "checked"?> > 4 <br>
                                  <input type="radio" name="Star" value="5" <?php if($Star == "5") echo "checked"?> > 5
                                 
                              </td>
                              <td>
                              	<span><?php echo $err_Star;?></span>
                              </td> 
                                </tr>
								
								
      
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
            
                            <tr>
                              <td>
                                  <b>
                                   What was the purpose of coming to this teacher?
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