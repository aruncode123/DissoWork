<!-- Piece of code that inserts value in database -->

<?php

include 'dbConnect.php';


if(isset($_POST["addNews"]))
{
  if(isset($_POST["newsTitle"]) && isset($_POST["newsDescription"]) && isset($_POST["newsDate"]))
  {
    $newsTitle = mysqli_real_escape_string($connection,$_POST["newsTitle"]); 
    $newsDescription = mysqli_real_escape_string($connection,$_POST["newsDescription"]); 
    $newsDate = mysqli_real_escape_string($connection,$_POST["newsDate"]); 
    
    $q ="INSERT INTO News(newsTitle,newsDescription,newsDate) VALUES ('$newsTitle','$newsDescription','$newsDate')";
    
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Added News');";
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