<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
</head>
<body>

<div class="container" style="width:1000px;">  

<?php
// define variables and set to empty values
$currpassErr = $newpassErr = $renamepassErr = "";
$currpass = $newpass = $renamepass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["currpass"])) {
    $currpassErr = "Current Password is required";
  } else {
    $currpass = $_POST["currpass"];
    // check if name only contains letters and whitespace
    //if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$currpass)) {
      //$currpassErr = "Must contain at least two characters";
    }
  }

  if (empty($_POST["currpass"] != $_POST["newpass"])) {
    $newpassErr = "New Password cannot be same as the Current Password";
  } else {
    $newpass = $_POST["newpass"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$newpass)) {
      $newpassErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }

    if (empty($_POST["newpass"] === $_POST["renamepass"])) {
    $renamepassErr = "New Password didn't match";
  } else {
    $renamepass = $_POST["renamepass"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$renamepass)) {
      $renamepassErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h2>CHANGE PASSWORD</h2></legend>

<label for="currpass"> Current Password &nbsp &nbsp &nbsp &nbsp : <input type="text" id="currpass" name="currpass" value="<?php echo $currpass;?>">
<span class="red"> <?php echo $currpassErr?></span> </label>

<label for="newpass"> <p style="color:green;"> New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <input type="text" id="newpass" name="newpass" value="<?php echo $newpass;?>">
<span class="red"> <?php echo $newpassErr?></span> </label> </p>


<label for="renamepass"> <p style="color:red;"> Retype New Password : <input type="text" id="renamepass" name="renamepass" value="<?php echo $renamepass;?>">
<span class="red"><?php echo $renamepassErr ?></span> </p> <hr><br>

<input type="Submit" name=""> </br> </br>

</fieldset> <br>


</fieldset>

</form>
</div>
</body>
</html>