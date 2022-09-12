<!-- Piece of code that inserts value in database -->

<?php

include 'dbConnect.php';


if(isset($_POST["addLocation"]))
{
  if(isset($_POST["location"]))
  {
    $Location = mysqli_real_escape_string($connection,$_POST["location"]); 
    
    $q ="INSERT INTO Locations(location) VALUES ('$Location')";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Added Location');";
      echo "window.location = '../locations.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../addLocation.php';";
      echo "</script>";
    }
  }
}
?>