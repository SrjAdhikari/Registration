<?php
$conn = new mysqli("localhost","root","","manakuru");

if ($conn->connect_error) {
	die("could not connect".$conn->connect_error);
}

$query="SELECT count(id) AS total FROM  customer ";
$result=mysqli_query($conn,$query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];

?>