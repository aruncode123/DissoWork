<!-- Piece of code that updates value in databas -->

<?php

include 'dbConnect.php';

if(isset($_POST["updateNewsBtn"]))
{

  if(isset($_POST["newsTitle"]) && isset($_POST["newsDescription"]) && isset($_POST["newsDate"]))
  {
  	$id = mysqli_real_escape_string($connection,$_POST["id"]); 
    $newsTitle = mysqli_real_escape_string($connection,$_POST["newsTitle"]); 
    $newsDescription = mysqli_real_escape_string($connection,$_POST["newsDescription"]); 
    $newsDate = mysqli_real_escape_string($connection,$_POST["newsDate"]); 
    
    $q ="UPDATE News SET newsTitle='$newsTitle',newsDescription='$newsDescription',newsDate='$newsDate' WHERE id='$id'";
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Updated');";
      echo "window.location = '../news.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../news.php';"; 
      echo "</script>";
    }
  }
}
?>