<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'home');
$mobile = "";
  $aadhar = "";


if(isset($_POST['save']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];
$email=$_POST['email'];
$image=$_FILES['image']['name'];
$b="SELECT * FROM home WHERE mobile='$mobile'";
$c="SELECT * FROM home WHERE aadhar='$aadhar'";
      $r=mysqli_query($con,$b);
      $s=mysqli_query($con,$c);

        if(mysqli_num_rows($r)>0)
        {
            echo "user already exists";
        }
        
    else if(mysqli_num_rows($s)>0)
        {
            echo 'user already exists';
            print("<script>location.href=\"register.php\"</script>");

        }

      else { 
$a="INSERT INTO home(id,fname,lname,dob,mobile,aadhar,email,image) values('','$fname','$lname','$dob','$mobile','$aadhar','$email','$image')";
mysqli_query($con,$a);	
echo "data sucessfully inserted";
print("<script>location.href=\"view.php\"</script>");
}
}
?>



