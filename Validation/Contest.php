<?php
            
     $name="";
     $err_name="";  

     $email="";
     $err_email=""; 


     $day="";
     $month="";
     $year="";
     $err_dmy="";  
     
     $gender="";
     $err_gender="";

     $perticipate="";
     $err_perticipate="";

     $categories=[];
     $err_categories="";

     $hasError = false;

     $arr1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $arr2= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $arr3= array("1990","1991","1992","1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020");


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
     	//****************************Name  Validation*********************
				
                if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 8)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 8)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 8)
               	{
                $err_name="Name must contain at least 8 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 8)
                {
                	$err_name="Name must contain at least 8 characters with space";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["name"]))
				{
                    $err_name="Number is not allowed";
			        $hasError = true; 
				}
		      

              //**********************Email  Validation************************
		      
		       
			if(empty($_POST["email"])){
                  
                $err_email="Email required";
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


		      //*********************Day-Month-Year  Validation*****************************


             if (!isset($_POST["day"]) && !isset($_POST["month"]) && !isset($_POST["year"])) 
		   {
			$err_dmy= "Day,Month and Year required";
			$hasError = true;
		   }

		else if(isset($_POST["day"]) && isset($_POST["month"]) && isset($_POST["year"]))
		{
			$day = $_POST["day"];
			$month = $_POST["month"];
			$year = $_POST["year"];
		}

		elseif (!isset($_POST["day"])) 
		{
			if(isset($_POST["month"]) && isset($_POST["year"]))
			{
				$err_dmy= "Day required";
			    $hasError = true;
			    $month = $_POST["month"];
			    $year = $_POST["year"];
			}

			elseif(isset($_POST["month"]))
			{
                $err_dmy= "Day and Year required";
			    $hasError = true;
			    $month = $_POST["month"];
			}

			elseif(isset($_POST["year"]))
			{
                $err_dmy= "Day and Month required";
			    $hasError = true;
			    $year = $_POST["year"];
			}
		}

		elseif (!isset($_POST["month"])) 
		{
			if(isset($_POST["day"]) && isset($_POST["year"]))
			{
				$err_dmy= "Month required";
			    $hasError = true;
			    $day = $_POST["day"];
			    $year = $_POST["year"];
			}

			elseif(isset($_POST["day"]))
			{
                $err_dmy= "Month and Year required";
			    $hasError = true;
			    $day = $_POST["day"];
			}

			elseif(isset($_POST["year"]))
			{
                $err_dmy= "Day and Month required";
			    $hasError = true;
			    $year = $_POST["year"];
			}
		}

		elseif (!isset($_POST["year"])) 
		{
			if(isset($_POST["day"]) && isset($_POST["month"]))
			{
				$err_dmy= "Year required";
			    $hasError = true;
			    $day = $_POST["day"];
			    $month = $_POST["month"];
			}

			elseif(isset($_POST["day"]))
			{
                $err_dmy= "Month and Year required";
			    $hasError = true;
			    $day = $_POST["day"];
			}

			elseif(isset($_POST["month"]))
			{
                $err_dmy= "Day and Year required";
			    $hasError = true;
			    $month = $_POST["month"];
			}
		}

             //**********************Gender Validation***************
			
			if(!isset($_POST["gender"])){
				$err_gender="Gender required";
				$hasError = true;
			}
				else{
				$gender=$_POST["gender"]; 
				
            }      
          //***************************************************8

          if(empty($_POST["perticipate"]))
            {
				$err_perticipate ="Perticipation reason required";
				$hasError = true;
            }
            else
            {
				$perticipate = $_POST["perticipate"];
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





			   
	 }		



?>


<html>
       <head>
	       <title>Contest Form</title>
	   </head>

       <body>
                 <h1> Contest Form </h1>
                    <form action="" method="post">
                        <table >
						    <tr>
                              <td>
                                   <b> Name  </b> 
                              </td>
							  <td>
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="25">
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
                              <td>
                              	<input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="25">
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
				           
                                 <td>
							      <input type="file" name="filename">
			    		         </td>
				           </tr>
						   
						   <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
  
                            <tr>
                              <td>
                                   <b>Date of Birth</b>
                              </td>
                               <td>
                                  <select name="day">
                                    <option selected="Day" disabled="Day">Day</option>";
                                     <?php
                                        foreach ($arr1 as $d) 
                                        {       if($day == $d)
                                                   echo "<option selected>$d</option>";
											    else
                                                   echo "<option>$d</option>"; 													
                                        }
                                     ?>
                                 </select>
                                    
                                 <select name="month">
                                           <option selected="Month" disabled="Month">Month</option>";
                                    <?php
                                        foreach ($arr2 as $m) 
                                        {                                            
                                                if($month == $m)
                                                   echo "<option selected>$m</option>";
											    else
                                                   echo "<option>$m</option>";                                            
                                        }
                                     ?>
                                 </select>

                                 <select name="year">
                                           <option selected="Year" disabled="Year">Year</option>";
                                     <?php
                                        foreach ($arr3 as $y) 
                                        {                                  
                                                if($year == $y)
                                                   echo "<option selected>$y</option>";
											    else
                                                   echo "<option>$y</option>";    
                                        }
                                     ?>
                                 </select>
                              </td>    
                              <td>
                              	<?php echo "$err_dmy"?>
                              	
                              </td>
                            </tr>
							
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							
							<tr>
                              <td>
                                <b>Gender</b>
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
							    <b>Why do you want to participate?  </b>  
							  </td>
                              <td> 
                              	<textarea cols="25" rows="3" name="perticipate"  ><?php echo $perticipate; ?></textarea>
                              </td>
                              <td>
                              	<span> <?php echo $err_perticipate; ?> </span>
                              </td>
                         </tr>
						 
						    <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
						 
						 <tr>
                              <td>
							    <b>Category</b>  
							  </td>
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
							    <b>Show some of your work</b> 
							  </td>
                              <td>
							     <input type="file" name="filename">
							  </td>
					    </tr>
							 <tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
						   <tr>
                              <td COLSPAN="2" align="center"><input type="submit" value="Register"></td>
                           </tr>
                        </table>
                </form>
        </body>
</html>