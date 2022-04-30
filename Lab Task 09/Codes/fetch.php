<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "cart_db");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM products 
  WHERE id  LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM products ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Price</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["price"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>