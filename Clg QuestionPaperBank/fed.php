<?php
$server="localhost";
$username="root";
$password="";
$db="question_bank";
$conn=mysqli_connect($server,$username,$password,$db);
$email=$_POST["email"];
$fed=$_POST["fed"];

$sql="insert into fed_form values('$email','$fed')";
$result=mysqli_query($conn,$sql);

if($result)
{echo "inserted";
}
else
{
echo "go back";
}
?>