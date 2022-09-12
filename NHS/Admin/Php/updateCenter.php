<!-- Piece of code that updates value in databas -->



<?php

include 'dbConnect.php';

if(isset($_POST["updateCenter"]))
{

  if(isset($_POST["updateCenterName"]) && isset($_POST["updateCenterLocation"]) && isset($_POST["updateCenterStatus"]) && isset($_POST["updateCenterAveragePeople"]))
  {
  	$id = mysqli_real_escape_string($connection,$_POST["updateCenterId"]);
    $updateCenterName = mysqli_real_escape_string($connection,$_POST["updateCenterName"]); 
    $updateCenterLocation = mysqli_real_escape_string($connection,$_POST["updateCenterLocation"]); 
    $updateCenterAddress = mysqli_real_escape_string($connection,$_POST["updateCenterAddress"]); 
    $updateCenterOpenTime = mysqli_real_escape_string($connection,$_POST["updateCenterOpenTime"]); 
    $updateCenterCloseTime = mysqli_real_escape_string($connection,$_POST["updateCenterCloseTime"]); 
    $updateCenterStatus = mysqli_real_escape_string($connection,$_POST["updateCenterStatus"]); 
    $updateCenterAveragePeople = mysqli_real_escape_string($connection,$_POST["updateCenterAveragePeople"]); 
    $updateCenterVaccines = $_POST["updateCenterVaccines"]; 



    $updateSelectedVaccines="";  
    foreach($updateCenterVaccines as $centerVaccine)  
    {  
      $updateSelectedVaccines .= $centerVaccine.",";  
    }  
    
    $q ="UPDATE Centers SET centerName='$updateCenterName',centerLocation='$updateCenterLocation',centerAddress='$updateCenterAddress',centerOpenTime='$updateCenterOpenTime',centerCloseTime='$updateCenterCloseTime',centerAveragePeople='$updateCenterAveragePeople',centerStatus='$updateCenterStatus',centerVaccines='$updateSelectedVaccines' WHERE id='$id'";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Updated');";
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