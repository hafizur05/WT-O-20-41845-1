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
$profilepicErr = "";
$profilepic = $size = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check file size
if (empty($_FILES["profilepic"]["size"] > 400000) && ($profilepic != "jpg" && $profilepic != "png" && $profilepic != "jpeg")) {
  $profilepicErr = "OPPS... File Format or Size not match!";
}

// Allow certain file formats
/*elseif($profilepic != "jpg" && $profilepic != "png" && $profilepic != "jpeg") {
  $profilepicErr = "Sorry, only JPG, JPEG, PNG & files are allowed.";
  $uploadOk = 0;
}
}*/
/*if (empty($_POST["profilepic"])) {
    $profilepicErr = "Required";
  }*/ else {
    $profilepic = $_POST["profilepic"];
    /*check if name only contains letters and whitespace
    if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$profilepic)) {
      $profilepicErr = "Must contain at least two characters";
    }
  }*/

}
}


?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h2>PROFILE PICTURE</h2></legend>

<img src="https://cdn.discordapp.com/attachments/814046726330908692/944173439810408458/unknown.png" width="155" height="140"> <br><br>


<input type="file" name="images" id="images"><br><br>

<span class="red"><?php echo $profilepicErr ?></span> <br> <hr>


<input type="Submit" name=""> <br> <br>

</fieldset>


</form>
</div>
</body>
</html>