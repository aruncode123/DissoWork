<!-- Piece of code that inserts value in database -->



<?php

include 'dbConnect.php';


if(isset($_POST["addCenter"]))
 {

 if(isset($_POST["centerName"]) && isset($_POST["centerLocation"]) && isset($_POST["centerAddress"]) && isset($_POST["centerOpenTime"]) && isset($_POST["centerCloseTime"]) && isset($_POST["centerStatus"]) && isset($_POST["centerAveragePeople"]))
 {
 
    $centerName = mysqli_real_escape_string($connection,$_POST["centerName"]); 
    $centerLocation = mysqli_real_escape_string($connection,$_POST["centerLocation"]); 
    $centerAddress = mysqli_real_escape_string($connection,$_POST["centerAddress"]); 
    $centerOpenTime = mysqli_real_escape_string($connection,$_POST["centerOpenTime"]); 
    $centerCloseTime = mysqli_real_escape_string($connection,$_POST["centerCloseTime"]); 
    $centerStatus = mysqli_real_escape_string($connection,$_POST["centerStatus"]); 
    $centerAveragePeople = mysqli_real_escape_string($connection,$_POST["centerAveragePeople"]); 
    $centerVaccines = $_POST["centerVaccines"]; 

    $selectedVaccines="";  
    foreach($centerVaccines as $centerVaccine)  
    {  
      $selectedVaccines .= $centerVaccine.",";  
    }

    $selectedVaccines=rtrim($selectedVaccines,",");
   
    
    $q ="INSERT INTO Centers(centerName,centerLocation,centerAddress,centerOpenTime,centerCloseTime,centerAveragePeople,centerStatus,centerVaccines) VALUES ('$centerName','$centerLocation','$centerAddress','$centerOpenTime','$centerCloseTime','$centerAveragePeople','$centerStatus','$selectedVaccines')";
     
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Added Center');";
      echo "window.location = '../centers.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../centers.php';";
      echo "</script>";
    }
  }
}

?>