<?php include 'uhead.php';?>

	

<!DOCTYPE html>
<html>
<body>

<div class="container" style="width:700px;"> 

	<fieldset>

	<style>
		*{
			box-sizing: border-box;
		}

		.child{
			border: 1px solid black;
		}

		.parent{
			display: flex;
		}
	</style>

<section class="parent">
	<section class="child">

<ul>
	<h3>Account </a> </h3><hr>
  <li><a href="dash.php">Dashboard</a></li>
  <li><a href="profile.php">View Profile</a></li>
  <li><a href="eprofile.php">Edit Profile</a></li>
  <li><a href="cpp.php">Change Profile Picture </a> &nbsp  &nbsp </li>
  <li><a href="cpass.php">Change Password</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

   </section>

   <section class="child"> 

   	<div class="container" style="width:460px;">


   		<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an Email</label>";  
      }  
      
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                //echo $current_data;
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                //echo $final_data;
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Save Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>   
      </head>  
      <body>  

           <div class="container" style="width:459px;">                  
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  


                     <fieldset>
                     <legend><h3>EDIT PROFILE</h3></legend>

                     <label>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>  
                     <input type="text" name="name" class="form-control" /> <br> <hr> 
                     <label>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                     <input type="text" name = "email" class="form-control" /><br> <hr>
                     


                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label> <br>
                    </fieldset> <hr>

                     <fieldset>
                     <legend>Date of Birth:</legend> <br>

                     <input type="date" name="dob"> <br>

                     </fieldset> <hr>
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /> <input type="reset" value="Reset"> <br> <br>

                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>

                     </fieldset>   <br>
                </form>  
           </div>  
      </body>  
 </html>  
   	</div>

   


    </section> <br>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>