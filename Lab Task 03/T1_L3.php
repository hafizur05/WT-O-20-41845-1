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

<div class="container" style="width:450px;">  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$name)) {
      $nameErr = "Must contain at least two (2) characters";
    }
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = $_POST["pass"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pass)) {
      $passErr = "Must not be less than eight (8) characters & contain at least one of the special characters (@, #, $, %)";
    }
  }
}


?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h2>LOGIN</h2></legend>

<label for="name"> User Name : <input type="text" id="name" name="name" value="<?php echo $name;?>">
<span class="red"> <?php echo $nameErr?></span> </label> </br> </br>


<label for="pass"> Password : <input type="text" id="pass" name="pass" value="<?php echo $pass;?>">
<span class="red"><?php echo $passErr ?></span> <br><br> <hr>


<input type="checkbox" name="remember" id="remember" value="<?php echo $remember;?>">
<label for="remember">Remember Me</label> </br> </br>

<input type="Submit" name=""> <a href="url">Forgot Password?</a></br> </br>

</fieldset> <br>


</fieldset>

</form>
</div>
</body>
</html>