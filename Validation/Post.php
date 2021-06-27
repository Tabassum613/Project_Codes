<?php 
     $fname="";
     $lname="";
     $err_name="";
     $email="";
     $err_email="";
	 $pass="";
     $err_pass="";
	 $code="";
	 $err_code="";
	 $desc="";
	 $err_desc="";
	 
	 $hasError=false;
	 if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
     	if (empty($_POST["fname"]) && empty($_POST["lname"]))   //Name Validation
     	{
     		$err_name="First Name & Last Name Required";
			$hasError = true;
     	}

     	elseif(!empty($_POST["fname"]) && !empty($_POST["lname"]))
		{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
		}

		elseif (!empty($_POST["fname"])) 
		{
			if(!empty($_POST["lname"]))
			{
				$fname=$_POST["fname"];
				$lname=$_POST["fname"];
			}

			else if(empty($_POST["lname"]))
			{
				$err_name="Last Name Required";
			    $hasError = true;
			    $fname=$_POST["fname"];
			}
		}

		elseif (!empty($_POST["lname"])) 
		{
			if(empty($_POST["fname"]))
			{
				$err_name="First Name Recuired";
			    $hasError = true;
			    $lname=$_POST["lname"];
			}
		}

		if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
			$hasError = true;
		}

		elseif(strpos($_POST["email"],'@') && strpos($_POST["email"],'.'))
		{
			$email=$_POST["email"];
		}

		elseif(!strpos($_POST["email"],'@') && !strpos($_POST["email"],'.'))
		{
             $err_email="First use @ and then .(dot)";
			 $hasError = true;
		}

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}

			else
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}
		}

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
		}
		
		if(empty($_POST["password"]))   //Password validation
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])>=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}
		elseif (strlen($_POST["password"])< 8 && !empty($_POST["password"]))  
	    {
			$err_pass="Password must contain at least 8 characters";
			$hasError = true;
		}
	
		
		/*if (isset($_POST['upload']))
		{
			$file_name= $_FILES['file'] ['name'];
			$file_type= $_FILES['file'] ['type'];
			$file_size= $_FILES['file'] ['size'];
			$file_temp_loc= $_FILES['file'] ['tmp_name'];
			$file_store= "Uploaded File/" .$file_name;

			move_uploaded_file($file_temp_loc, $file_store);	

			if (isset($_POST['file'])) 
            {
            	$file_stored=$_POST["file"];
            }
		}*/
		
		/*if (isset($_POST['upload']))
		{
			$file_name= $_FILES['file'] ['name'];
			$file_type= $_FILES['file'] ['type'];
			$file_size= $_FILES['file'] ['size'];
			$file_temp_loc= $_FILES['file'] ['tmp_name'];
			$file_store= "Uploaded File/" .$file_name;

			move_uploaded_file($file_temp_loc, $file_store);	

			if (isset($_POST['file'])) 
            {
            	$file_stored=$_POST["file"];
            }
		}*/
		
		
		 if(empty($_POST["desc"]))
            {
				$err_desc ="Description Required";
				$hasError = true;
            }
            else
            {
				$desc = $_POST["desc"];
            }
    }		
?>

<html>
<head>
    
    <title>Post</title>
</head>
<body>
      <h1>Post</h1><br>
      <form action=""  method="Post">
            <table>
                   <tr>
                       <td>
                           <b> Name</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" name="fname" placeholder="First Name" size="10" value="<?php echo $fname;?>">-
                           <input type="text" name="lname" placeholder="Last Name" size="14" value="<?php echo $lname;?>">
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_name;?>
                       	   </span>
                       </td>
                   </tr>

                    <tr>
                       <td>
                           <b> Email</b>
                       </td>
                   </tr>

                   <tr>
                       <td>
                           <input type="text" placeholder="Email" size="31" name="email" value="<?php echo $email;?>">
                       </td>

                       <td>
                       	   <span>
                       	   	     <?php echo $err_email;?>
                       	   </span>
                       </td>
                   </tr>
				   
				   <tr>
                	  	     <td><b>Password</b></td>
                   </tr>
				    <tr>
                	  <td>
      	    	   	   	   <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="31">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_pass;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   <tr>
                         <td>
                             <b>Upload Image</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file" name="filename">
                         </td>
                     </tr>

					 
					 <tr>
                         <td>
                             <b>Upload Vedio</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file" name="filename">
                         </td>
                     </tr>
					 
					       <tr>
		                     <td>
							   <b>Description</b>
							 </td>
						   </tr>
							<tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="30" rows="5" name="desc"  ><?php echo $desc; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_desc;?>
                              	</span>
                              </td> 
      	    	        </tr>
					   <tr>
                       <td align="center">
                            <input type="submit" name="upload" value="Submit">
                       </td>
                  </tr>
            </table>
      </form>
</body>
</html>

	 