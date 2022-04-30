<?php

$conn = mysqli_connect('localhost','root','','cart_db');

if (!$conn) {
	echo "Connection Failed" . mysqli_connect();
}

?>