<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'home');
$id=$_REQUEST['id'];
$p="SELECT * FROM home where id='".$id."'";
$result=mysqli_query($con,$p);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<style type="text/css">
		input.b
		{
			color:blue;
			font-size: 25px;
		}
		input.c
		{
			color:blue;
			font-size: 35px;
		}
		p{
			font-size: 25px;
		}
		
	</style>
<h1><center><u>Update Record</u></center></h1>
<div class="form">
<?php
if(isset($_POST['edit']))
{
$id=$_REQUEST['id'];
$fname=$_REQUEST['fn'];
$lname=$_REQUEST['ln'];
$dob=$_REQUEST['date'];
$mobile=$_REQUEST['mobileno'];
$aadhar=$_REQUEST['aadharno'];
$email=$_REQUEST['emailid'];
$pic=$_REQUEST['pic'];
$d="UPDATE home SET fname='".$fname."',lname='".$lname."',dob='".$dob."',mobile='".$mobile."',aadhar='".$aadhar."',email='".$email."',image='".$pic."' WHERE id='".$id."'";
if(mysqli_query($con,$d))
{
echo "updated sucessfully";
print("<script>location.href=\"view.php\"</script>");
}
else
{
	echo "failed";
}
}
else 
{
	
?>

<html>

<center><form  name="form" action="" method="post">
	<input type="hidden" name="new" class="b" value="1">
	<input type="hidden" name="id" class="b" value="<?php echo $row['id'];?>">
		<p>first name:<input type="text"class="b" name="fn" value="<?php echo $row['fname'];?>"></p>
	<p>Last name:<input type="text" class="b" name="ln" value="<?php echo $row['lname'];?>"></p>
	<p>Date of Birth:<input type="date" class="b" name="date" value="<?php echo $row['dob'];?>"></p>
	<p>Mobile:<input type="text" class="b" name="mobileno" value="<?php echo $row['mobile'];?>"></p>
	<p>Aadhar no:<input type="" class="b" name="aadharno" type="text" name="aadharno" value="<?php echo $row['aadhar'];?>"></p>
	<p>Email id:<input class="b" type="text" name="emailid" value="<?php echo $row['email'];?>"></p>
	<p>Upload image:<input class="b" type="file" name="pic" value="<?php echo $row['image'];?>"></p>
		
	<p><input type="submit"class="c" name="edit" value="edit"></p>
</form></center>
<?php }?>

