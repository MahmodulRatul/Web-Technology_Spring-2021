    <?php
        $sname="";
        $err_sname="";
        $email="";
        $err_email="";
        $num="";
        $err_num="";
        $stad="";
	    $err_stad="";
	    $city="";
	    $err_city="";
		$Typesofpet="";
		$err_Typesofpet="";
		$Status="";
	    $err_Status="";
		$hasError=false;
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["sname"])){
                $err_sname="*Shop name Required";
				$hasError=true;
                
            }
            else if(strlen($_POST["sname"]) <8){
                $err_sname="*Shop name should be at least 8 characters";
				$hasError=true;
                
            }
            else{
                $sname=htmlspecialchars($_POST["sname"]);
            }
            

            if(empty($_POST["email"])){
               $err_email="*Please enter email";
			   $hasError=true;
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }

            if(empty($_POST["num"]))
          {
             $err_num="Number Required";
             $hasError=true;
          }
           elseif(!is_numeric($_POST["num"]))
          {
             $err_num="*Numaric Value required";
             $hasError=true;
          }
         else
          {
             $num=$_POST["num"];
          }

            if(empty($_POST["stad"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["stad"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }



            
			 if(!isset($_POST["Typesofpet"]))
		 {
			 $err_Typesofpet="[This field can not be skipped]";
			 $hasError=true;
		 }
		 else
		 {
			 $Typesofpet=$_POST["Typesofpet"];
		 }
		  if(!isset($_POST["Status"]))
		 {
			 $err_Status="[This field can not be skipped]";
			 $hasError=true;
		 }
		 else
		 {
			 $Status=$_POST["Status"];
		 }
         if(!$hasError)
		{
			header("Location:allshops.php");
		}
           
        }
    ?>


<html>
<head>
        <title>Edit Shop</title>
      <style>
	 
	            .add-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:17%;
				
				}
 		
	  
	  
	  </style>

</head>
        
<body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Shop</h1></legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><Span><b>Shop Name</b></Span></td>
                    <td>:<input type="text" placeholder="Shop Name" value=" <?php echo $sname; ?> " name="sname"> 
                    <span><?php echo $err_sname; ?></span></td>
                </tr>
			
				  <tr>
					        <td><span><b>Shop Address:</b></span></td>
					        <td>:<input type="text" name="stad" value="<?php echo $stad;?>" placeholder="Street Address">
					        <span><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					   <td> :<input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size="">
                           <span><?php echo $err_city;?></span></td>
				</tr>
                
				<tr>
	                <td><span><b>Shop types</b></span></td>
	                 <td>:<select name="Typesofpet">
	                     <option disabled selected>Chose One</option>
	                     <option>Pet food</option>
	                     <option>Pet Shop</option>
	                     <option>Pet Accessories</option>
		                 <option>Others</option>
	                     </select>
	                     <span><?php echo $err_Typesofpet;?></span><br>
		                  </td>
	                </tr>
                
               
                <tr>
                <td><span><b>Email</b></span></td>
                    <td>:<input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email"> 
                    <span><?php echo $err_email; ?></span></td>
                </tr>

                <tr>
                        <td><span><b>PhoneNumber</b></span></td>
                          <td>:<input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="Phone number">
                          <span><?php echo $err_num;?></span></td>

                  </tr>
				  
				   <tr>
					       <td><span><b>Status</b></span></td>
						   <td>:<select name="Status">
							     <option disabled selected>Choose One</option>
							     <option>Active</option> 
							     <option>Not Active</option>
										
						</select>
						       <span><?php echo $err_Status;?></span></td>
						</tr>
               
                
             
                
					<tr>
					    <td></td>
						<td><input type="submit" name="submit" value="Edit Shop"></td>
				</tr>



            </table>
        </form>
        
    </fieldset>
	</div>
   

</body>
</html>