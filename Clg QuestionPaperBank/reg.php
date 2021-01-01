<?php
$server="localhost";
$username="root";
$password="";
$db="question_bank";
$conn=mysqli_connect($server,$username,$password,$db);
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$class=$_POST["class"];
$sem=$_POST["sem"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$sql="insert into reg_form values('$fname','$lname','$email','$class','$sem','$phone','$password')";
$result=mysqli_query($conn,$sql);

if($result)
{echo "inserted";
}
else
{
echo "go back";
}
?>