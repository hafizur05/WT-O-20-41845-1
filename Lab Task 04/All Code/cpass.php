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




  <style type="text/css">
    .red{
      color: red;
    }
  </style>


<div class="container" style="width:459px;">  

<?php
// define variables and set to empty values
$cpErr = $npErr = $rnpErr = "";
$cp = $np = $rnp = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cp"])) {
    $cpErr = "Current Password is required";
  } else {
    $cp = $_POST["cp"];
    // check if name only contains letters and whitespace
    //if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$name)) {
      //$nameErr = "Must contain at least two characters";
    }
  }

  if (empty($_POST["cp"] != $_POST["np"])) {
    $npErr = "Same as Current Password";
  } else {
    $np = $_POST["np"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$np)) {
      $npErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }

    if (empty($_POST["np"] === $_POST["rnp"])) {
    $rnpErr = "New Password didn't match";
  } else {
    $rnp = $_POST["rnp"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$rnp)) {
      $rnpErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }



?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h3>CHANGE PASSWORD</h3></legend>

<label for="cp"> Current Password &nbsp &nbsp &nbsp &nbsp : <input type="text" id="cp" name="cp" value="<?php echo $cp;?>"> </br> </br>
<span class="red"> <?php echo $cpErr?></span> </label>

<label for="np"> <p style="color:green;"> New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <input type="text" id="np" name="np" value="<?php echo $np;?>"> </br> </br>
<span class="red"> <?php echo $npErr?></span> </label> </p>


<label for="rnp"> <p style="color:red;"> Retype New Password : <input type="text" id="rnp" name="rnp" value="<?php echo $rnp;?>"> </br> </br>
<span class="red"><?php echo $rnpErr ?></span> </p> <hr>



<input type="Submit" name=""> </br> </br>

</fieldset> <br>


</fieldset>

</form>
</div>




   	</div>

    </section>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>