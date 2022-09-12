<!-- Piece of code that inserts value in database -->

<?php

include 'dbConnect.php';


if(isset($_POST["addVaccine"]))
{
  if(isset($_POST["vaccine"]))
  {
    $Vaccine = mysqli_real_escape_string($connection,$_POST["vaccine"]); 
    
    $q ="INSERT INTO Vaccines(vaccine) VALUES ('$Vaccine')";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Added vaccine');";
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