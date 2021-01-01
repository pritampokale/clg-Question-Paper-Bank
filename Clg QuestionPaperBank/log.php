<?php

$server="localhost";
$username="root";
$password="";
$db="question_bank";
$conn=mysqli_connect($server,$username,$password,$db);

$sql = "SELECT * from reg_form";


$result = mysqli_query($conn,$sql);


if(isset($_POST['submit']))
{

$email = $_POST['email'];
$pass =$_POST['pass'];

if(mysqli_num_rows($result)>0)
{
   while($rows=mysqli_fetch_assoc($result))
   {
      if(($email==$rows['email']) && ($pass==$rows['password']))
      {
         if("BCS"==$rows['class'])
         {
            echo "in bcs";

            if("sem1"==$rows['sem'])
            {
               header("location:bcs 1.html");
            }

            elseif("sem2"==$rows['sem'])
            {
               header("location:bcs 2.html");
            }

            elseif("sem3"==$rows['sem'])
            {
               header("location:bcs 3.html");
            }

            elseif("sem4"==$rows['sem'])
            {
               header("location:bcs 4.html");
            }

            elseif("sem5"==$rows['sem'])
            {
               header("location:bcs 5.html");
            }

            elseif("sem6"==$rows['sem'])
            {
               header("location:bcs 6.html");
            }
            else{
               echo "no one in bcs";
            }
         }  


         elseif("BSC(I.T) & Animation"==$rows['class'])
         {
            echo "in it";

           if("sem1"==$rows['sem'])
            {
               header("location:bscit 1.html");
            }

            elseif("sem2"==$rows['sem'])
            {
               echo "in it";
               header("location:bscit 2.html");
            }

            elseif("sem3"==$rows['sem'])
            {
               header("location:bscit 3.html");
            }

            elseif("sem4"==$rows['sem'])
            {
               header("location:bscit 4.html");
            }

            elseif("sem5"==$rows['sem'])
            {
               header("location:bscit 5.html");
            }

            elseif("sem6"==$rows['sem'])
            {
               header("location:bscit 6.html");
            }
            else{
               echo "no one in it";
            }
         }

         
         elseif(("BCA"==$rows['class']))
         {
            echo "in bca";

           if("sem1"==$rows['sem'])
            {
               header("location:bca 1.html");
            }

            elseif("sem2"==$rows['sem'])
            {
               header("location:bca 2.html");
            }

            elseif("sem3"==$rows['sem'])
            {
               header("location:bca 3.html");
            }

            elseif("sem4"==$rows['sem'])
            {
               header("location:bca 4.html");
            }

            elseif("sem5"==$rows['sem'])
            {
               header("location:bca 5.html");
            }

            elseif("sem6"==$rows['sem'])
            {
               header("location:bca 6.html");
            }
            else{
               echo "no one in bca";
            }
         }

         else
           {echo "p";}
      }
      else
      {
         header("location:index.html");

      }

   }

}
else
      {
         echo "no error";
      }
}

?>