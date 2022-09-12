<!-- Piece of code that updates value in databas -->

<?php

include 'dbConnect.php';


if(isset($_POST["updateLocationBtn"]))
{

  if(isset($_POST["location"]))
  {
     
  	$id = mysqli_real_escape_string($connection,$_POST["id"]); 
    $Location = mysqli_real_escape_string($connection,$_POST["location"]); 
    
    $q ="UPDATE Locations SET location='$Location' WHERE id='$id'";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Updated');";
      echo "window.location = '../locations.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../locations.php';"; 
      echo "</script>";
    }
  }
}
?>