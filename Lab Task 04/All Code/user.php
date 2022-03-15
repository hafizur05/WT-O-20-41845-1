
<?php 
session_start();

if (isset($_SESSION['username'])) {

	echo "<h1>Welcome to your dashboard ". $_SESSION['username']. "</h1>";
	echo "<a href='logout.php'>Logout</a>";

} else {
	header("location:login.php");
}


 ?>


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
   	</div>

   	   	<h3> &nbsp  &nbsp Welcome

   		<?php


                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>

                               <td>'.$row["name"].'</td>

                               </tr>'; 
                                
                          }

                          ?>

                       </h3>



    </section> <br>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>