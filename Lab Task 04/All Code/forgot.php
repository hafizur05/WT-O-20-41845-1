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

<div class="container" style="width:700px;"> 

<?php include 'head.php';?>

<fieldset>

<?php
// define variables and set to empty values
$emailErr = "";
$email = "";


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Format";
    }
  }


?>

<?php 
        session_start();

      $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);
                          foreach($data as $row)
                          {   
                              echo 

                               $row["e-mail"];

                            
                               
                                
                          }

                          foreach($data as $row1)
                          {   
                              echo 

                               $row["pass"];

                            
                               
                                
                          }



                          
        


        $email = "";
        $pass = "";
        $msg = "";

        if (isset($_POST['e-mail'])) {
            if ($_POST['e-mail']==$email) {
                echo  $pass;

            }else{
                $msg = "Invalid Username or Password!";
            }
        }


     ?>

     <?php 
    if (isset($email)) {
        echo "$pass";
     } ?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h3>FORGOT PASSWORD</h3></legend>

<label for="email"> Enter Email &nbsp : <input type="text" id="email" name="email" value="<?php echo $email;?>">
<span class="red"><?php echo $emailErr ?></span> <br> <hr>


<input type="Submit" name=""></br> </br>

</fieldset> <br>


</fieldset>

                      </fieldset>

                      <?php include 'foot.php';?>


</form>
</div>
</body>
</html>