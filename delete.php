<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'home');
$id=$_REQUEST['id'];
$query = "DELETE FROM home WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>