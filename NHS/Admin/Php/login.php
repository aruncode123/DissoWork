<!-- Piece of code that performs login functionality -->


<?php
session_start();

include 'dbConnect.php';

if($connection){
    $username= $_POST['email'];
    $password=$_POST['password'];


  $query="select distinct * from users where email='$username' and password='$password'";
  $res=mysqli_query($connection,$query);
 
  if(mysqli_num_rows($res)>0)
  {
    $_SESSION['user']=mysqli_fetch_assoc($res);
    $_SESSION['just_logged']=true;
    header("location:../dashboard.php");
  }
  else
  {
     $_SESSION['just_logged']=false;
      echo "<script>";
      echo "alert('Invalid Email or Password');";
      echo "window.location = '../index.php';"; // redirect with javascript, after page loads
      echo "</script>";
  }
}
else 
{
	echo "NOT CONNECTED";
}
?>