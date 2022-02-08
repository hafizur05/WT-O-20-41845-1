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

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateofbirthErr = $dateErr = $monthErr =$yearErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $gender = $dateofbirth1 = $dateofbirth2 = $dateofbirth3 = $degree = $bloodgroup = $month = $date = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

// For Date of Birth

 
if (empty($_POST["dateofbirth1"])) {
    $dateErr = "Cannot be empty";
  } else {
    $dateofbirth1 = $_POST["dateofbirth1"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(^[1-9]$)|(^0[1-9]|1[0-9]|2[0-9]|3[0-1]$)$/",$dateofbirth1)) {
          $dateErr = "Date must be between 1-31";
    }
  }

    if (empty($_POST["dateofbirth2"])) {
    $monthErr = "Cannot be empty";
  } else {
    $dateofbirth2 = $_POST["dateofbirth2"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(^[1-9]$)|(^0[1-9]|1[0-2]$)$/",$dateofbirth2)) {
      $monthErr = "Month must be between 1-12";
    }  
  }

    if (empty($_POST["dateofbirth3"])) {
    $yearErr = "Cannot be empty";
  } else {
    $dateofbirth3 = $_POST["dateofbirth3"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(195[3-9]|196[0-9]|197[0-9]|198[0-9]|199[0-8])$/",$dateofbirth3)) {
      $yearErr = "Year must be between 1953-1998";
    }  
  }


// For Gender

   if (empty($_POST["gender"])) {
    $genderErr = "At least two of them must be selected";
  } else {
    $gender = $_POST["gender"];
  }

//For Degree

 if (empty($_POST["degree"])) {
    $degreeErr = "At least two of them must be selected";
  } else {
    $degree = $_POST["degree"];
  }

//For Blood Group

  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Must be selected";
  } else {
    $bloodgroup = $_POST["bloodgroup"];
  }
}
?>
<fieldset><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<fieldset>
		<legend><b> NAME </b></legend>
		<input type="text" name="name" value="<?php echo $name;?>"><hr><span class="red"><?php echo $nameErr ?></span><br></fieldset>
		<br>

    <fieldset>
		<legend><b> EMAIL </b></legend>
		<input type="email" name="email" value="<?php echo $email;?>"><b> i </b><hr><span class="red"><?php echo $emailErr ?></span><br></fieldset>
		<br>

		<fieldset>
    <legend><b>DATE OF BIRTH</b></legend>

    __dd______mm____yyyy_<br>
    <input type="text" name="dateofbirth1" size=2 maxlength=2 value="<?php echo $dateofbirth1;?>">


    <input type="text" name="dateofbirth2" size=2 maxlength=2 value="<?php echo $dateofbirth2;?>">

    <input type="text" name="dateofbirth3" size=4 maxlength=4 value="<?php echo $dateofbirth3;?>"> <br> <hr>

    <span class="red"><?php echo $dateErr ?></span> <br>
    <span class="red"><?php echo $monthErr ?></span> <br>
    <span class="red"><?php echo $yearErr ?></span> <br>

    </fieldset> <br>

		<fieldset>
		<legend><b> GENDER </b></legend>
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other<hr><span class="red"><?php echo $genderErr ?></span><br></fieldset><br>

		<fieldset>
		<legend><b> DEGREE </b></legend>
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="SSC") echo "checked";?>
		value="SSC">SSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="HSC") echo "checked";?>
		value="HSC">HSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="BSc") echo "checked";?>
		value="BSc">BSc
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="MSc") echo "checked";?>
		value="MSc">MSc<hr><span class="red"><?php echo $degreeErr ?></span><br></fieldset>
		<br>

		<fieldset>
	  <legend><b> BLOOD GROUP </b></legend>
	  <select id="bloodgroup" name="bloodgroup">
	  <option value="">
	  <option value="A+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="A+") echo "checked";?>
		value="A+">A+
		<option value="A-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="A-") echo "checked";?>
		value="A-">A-
		<option value="B+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="B+") echo "checked";?>
		value="B+">B+
		<option value="B-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="B-") echo "checked";?>
		value="B-">B-
		<option value="O+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="O+") echo "checked";?>
		value="O+">O+
		<option value="O-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="O-") echo "checked";?>
		value="O-">O-
		<option value="Ab+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="AB+") echo "checked";?>
		value="AB+">AB+
		<option value="AB-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="AB-") echo "checked";?>
		value="AB-">AB-
    </select><hr><span class="red"><?php echo $bloodgroupErr ?></span><br><br><input type="submit" name=""></option>
	  </fieldset><br><br>

  </form>

</body>
</html>