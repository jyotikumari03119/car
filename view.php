<?php

session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'home');
?>

<h1><center><u>VIEW DETAILS</u></center></h1>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th>SI .no</th><th>FIRST NAME</th><th>LAST NAME</th><th>DATE OF BIRTH</th><th>MOBILE</th><th>AADHAR</th><th>Emailid</th><th>Image</th><th>MODIFY<th></tr>
</thead>
<tbody>
<?php
$count=1;
$q="SELECT * From home";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($result)){?>

	<tr><td align=center><?php echo $count;?></td><td align="center"><?php echo $row["fname"];?></td>
	<td align="center"><?php echo $row["lname"];?></td><td align="center"><?php echo $row["dob"];?></td>
	<td align="center"><?php echo $row["mobile"];?></td><td align="center"><?php echo $row["aadhar"];?></td>
	<td align="center"><?php echo $row["email"];?></td><td align="center"><?php echo $row["image"];?></td>
<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>      
<?php $count++; }?>
</tbody>
</table>
<style type="text/css">
	table,td,th{
		color:blue;
	}
</style>
