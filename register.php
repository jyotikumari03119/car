

<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<h1><center><u>Registration form</u></center></h1>
<body bgcolor="lightblue">
<style>
input.b
{
height: 70px;
  width: 500px;
  background-color: powderblue;
}
h1
{
color:red;
}

</style>
	<form method="post" action="register_action.php" enctype="multipart/form-data">
<center>

First Name:<input class="b" type="text" name="fname" placeholder="" required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

Last Name:<input class="b" type="text" name="lname" placeholder="" required><br><br>
Date of Birth:<input class="b" type="Date" name="dob" placeholder="Date of Birth" required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mobile no:<input class="b" type="text" name="mobile" placeholder="" required><br><br>
Aadhar no:<input class="b"type="text" name="aadhar" placeholder="" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Email id:<input class="b" type="email" name="email" placeholder="" required><br><br>
Upload image:<input class="b" type="file"   name="image" placeholder="" required><br><br>

        <input class="b" type="submit" name="save" value="Register">
       </center>
         </form>
         <?php if(!empty($response)) { ?>
    <div class="response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
    <?php }?>
</body>
</html>