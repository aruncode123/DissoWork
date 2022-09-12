<!-- Piece of code that inserts value in database -->

<?php

// starting session

session_start();

// including database connection file

include 'dbConnect.php';

// checking if desired btn fired the function

if(isset($_POST["addFaq"]))
{
  // checking if desired values are available in post array or not
  if(isset($_POST["faqTitle"]) && isset($_POST["faqDescription"]))
  {
     // saving values into variables from post array
    $FaqTitle = mysqli_real_escape_string($connection,$_POST["faqTitle"]); 
    $FaqDescription = mysqli_real_escape_string($connection,$_POST["faqDescription"]); 

    //getting signed in user information
    $UserName=$_SESSION['user']['name'];

     // writting sql query to insert values from variables to database
    $q ="INSERT INTO FAQ(username,title,comment) VALUES ('$UserName','$FaqTitle','$FaqDescription')";
    
    //executing sql query
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Added');";
      echo "window.location = '../faq.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../faq.php';";
      echo "</script>";
    }
  }
}
?>