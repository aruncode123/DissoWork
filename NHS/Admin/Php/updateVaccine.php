<!-- Piece of code that updates value in databas -->

<?php

include 'dbConnect.php';


if(isset($_POST["updateVaccineBtn"]))
{

  if(isset($_POST["vaccine"]))
  {
     
  	$id = mysqli_real_escape_string($connection,$_POST["id"]); 
    $vaccine = mysqli_real_escape_string($connection,$_POST["vaccine"]); 
    
    $q ="UPDATE Vaccines SET vaccine='$vaccine' WHERE id='$id'";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Updated');";
      echo "window.location = '../vaccines.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../vaccines.php';"; 
      echo "</script>";
    }
  }
}
?>